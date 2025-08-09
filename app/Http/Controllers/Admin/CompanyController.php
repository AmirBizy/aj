<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Company;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    // index page
    public function index()
    {
        $company = Company::first();
        if($company) {
            $company->delete();
        }
        return view('admin.companies.index');
    }

    // create company page
    public function create()
    {
        return view('admin.companies.create');
    }

    // store company
    public function store(Request $request) {
        // validation
        $rules = [];
        foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $rules["translations.$locale_key.image"] = ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'];
            $rules["translations.$locale_key.title"] = ['required', 'string', 'min:2', 'max:255'];
            $rules["translations.$locale_key.status"] = ['required', 'in:active,de_active'];
        }
        $validated = $request->validate($rules, [], $this->customAttributes());

        // update data with multi language
        $translations = $request->input('translations', []);
        $files = $request->file('translations', []);

        $company = Company::create([
            'created_at' => now(),
        ]);

        foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $fields = $translations[$locale_key] ?? [];
            $fileFields = $files[$locale_key] ?? [];

            foreach (array_merge(array_keys($fields), array_keys($fileFields)) as $field) {
                // مقدار پیش‌فرض
                $value = $fields[$field] ?? null;

                // اگر فایل جدید آپلود شده
                if (isset($fileFields[$field]) && $fileFields[$field] instanceof \Illuminate\Http\UploadedFile) {
                    $file = $fileFields[$field];

                    // ذخیره فایل جدید
                    $path = $file->store("uploads/$locale_key", 'public');
                    $value = 'assets/' . $path;
                }

                // ذخیره در جدول translations
                $company->setTranslation($field, $value, $locale_key);
            }
        }

        // show success message after updated data and back
        Alert::success('افزودن موفق', 'اطلاعات با موفقیت ایجاد شد')->showConfirmButton('باشه', '#6576ff')->autoClose(5000);
        return redirect()->route('admin.companies.index');
    }

    // validation field name
    private function customAttributes()
    {
        $attributes = [];

        foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $langName = $locale_info['native'];

            $attributes["translations.$locale_key.image"] = "تصویر ($langName)";
            $attributes["translations.$locale_key.title"] = "عنوان ($langName)";
            $attributes["translations.$locale_key.status"] = "وضعیت ($langName)";
        }

        return $attributes;
    }
}
