<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use RealRashid\SweetAlert\Facades\Alert;

class AboutMeController extends Controller
{
    // about me index page
    public function index()
    {
        $about_me = AboutMe::first();
        return view ('admin.about_me.index' , compact('about_me'));
    }

    // update method
    public function update(Request $request)
    {
        // get data
        $about_me = AboutMe::first();

        // validation
        $rules = [];
        foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $rules["translations.$locale_key.title"] = ['required', 'string', 'max:255'];
            $rules["translations.$locale_key.content"] = ['nullable', 'string'];
            $rules["translations.$locale_key.resume"] = ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:2048'];
            $rules["translations.$locale_key.image"] = ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'];
        }
        $validated = $request->validate($rules, [], $this->customAttributes());

        // update data with multi language
        $translations = $request->input('translations', []);
        $files = $request->file('translations', []);

        foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $fields = $translations[$locale_key] ?? [];
            $fileFields = $files[$locale_key] ?? [];

            foreach (array_merge(array_keys($fields), array_keys($fileFields)) as $field) {
                // مقدار پیش‌فرض
                $value = $fields[$field] ?? null;

                // اگر فایل جدید آپلود شده
                if (isset($fileFields[$field]) && $fileFields[$field] instanceof \Illuminate\Http\UploadedFile) {
                    $file = $fileFields[$field];

                    // قبل از آپلود، حذف فایل قدیمی (اگه وجود داشت)
                    $old = $about_me->translations()
                        ->where('key', $field)
                        ->where('locale', $locale_key)
                        ->first();

                    if ($old && $old->value && file_exists(public_path($old->value))) {
                        unlink(public_path($old->value));
                    }

                    // ذخیره فایل جدید
                    $path = $file->store("uploads/$locale_key", 'public');
                    $value = 'assets/' . $path;
                }

                // ذخیره در جدول translations
                $about_me->setTranslation($field, $value, $locale_key);
            }
        }

        // show success message after updated data and back
        Alert::success('ویرایش موفق', 'اطلاعات با موفقیت ذخیره شد')->showConfirmButton('باشه', '#6576ff')->autoClose(5000);
        return back();
    }

    // validation field name
    private function customAttributes()
    {
        $attributes = [];

        foreach (\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $langName = $locale_info['native'];

            $attributes["translations.$locale_key.title"] = "عنوان ($langName)";
            $attributes["translations.$locale_key.content"] = "متن ($langName)";
            $attributes["translations.$locale_key.resume"] = "رزومه ($langName)";
            $attributes["translations.$locale_key.image"] = "تصویر ($langName)";
        }

        return $attributes;
    }
}
