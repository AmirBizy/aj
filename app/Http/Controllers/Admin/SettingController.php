<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    // return web setting index page
    public function index() {
        $setting = Setting::first();
        return view('admin.setting.index' , compact('setting'));
    }

    // update method
    public function update(Request $request)
    {
        // get data
        $setting = Setting::first();

        // validation
        $rules = [];
        foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $rules["translations.$locale_key.title"] = ['required', 'string', 'max:255'];
            $rules["translations.$locale_key.logo"] = ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4098'];
            $rules["translations.$locale_key.show_arrow_up_btn"] = ['required', 'in:active,de_active'];
            $rules["translations.$locale_key.call_to_action_text"] = ['nullable', 'string'];
            $rules["translations.$locale_key.call_to_action_btn_title"] = ['nullable', 'string', 'max:255'];
            $rules["translations.$locale_key.show_call_to_action_box"] = ['required', 'in:active,de_active'];
            $rules["translations.$locale_key.footer_text"] = ['nullable', 'string'];
            $rules["translations.$locale_key.show_about_me_menu_btn"] = ['required', 'in:active,de_active'];
            $rules["translations.$locale_key.show_services_menu_btn"] = ['required', 'in:active,de_active'];
            $rules["translations.$locale_key.show_works_menu_btn"] = ['required', 'in:active,de_active'];
            $rules["translations.$locale_key.show_contact_menu_btn"] = ['required', 'in:active,de_active'];
            $rules["translations.$locale_key.instagram"] = ['nullable', 'string'];
            $rules["translations.$locale_key.telegram"] = ['nullable', 'string'];
            $rules["translations.$locale_key.linkedin"] = ['nullable', 'string'];
            $rules["translations.$locale_key.github"] = ['nullable', 'string'];
            $rules["translations.$locale_key.display_title_home_sidebars"] = ['nullable', 'string'];
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
                    $old = $setting->translations()
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
                $setting->setTranslation($field, $value, $locale_key);
            }
        }

        // show success message after updated data and back
        Alert::success('ویرایش موفق', 'اطلاعات با موفقیت ذخیره شد')->showConfirmButton('باشه', '#6576ff')->autoClose(5000);
        return back();
    }

    // validation fields
    private function customAttributes()
    {
        $attributes = [];

        foreach (LaravelLocalization::getSupportedLocales() as $locale_key => $locale_info) {
            $langName = $locale_info['native'];

            $attributes["translations.$locale_key.title"] = "عنوان ($langName)";
            $attributes["translations.$locale_key.logo"] = "لوگو ($langName)";
            $attributes["translations.$locale_key.show_arrow_up_btn"] = "نمایش دکمه اومدن به بالا ($langName)";
            $attributes["translations.$locale_key.call_to_action_text"] = "متن باکس آخر تمام صفحات ($langName)";
            $attributes["translations.$locale_key.call_to_action_btn_title"] = "عنوان دکمه ($langName)";
            $attributes["translations.$locale_key.show_call_to_action_box"] = "نمایش باکس در تمامی صفحات ($langName)";
            $attributes["translations.$locale_key.footer_text"] = "متن فوتر ($langName)";
            $attributes["translations.$locale_key.show_about_me_menu_btn"] = "نمایش منو درباره من ($langName)";
            $attributes["translations.$locale_key.show_services_menu_btn"] = "نمایش منو خدمات من ($langName)";
            $attributes["translations.$locale_key.show_works_menu_btn"] = "نمایش منو کار و پروژه ها ($langName)";
            $attributes["translations.$locale_key.show_contact_menu_btn"] = "نمایش منو ارتباط با من ($langName)";
            $attributes["translations.$locale_key.instagram"] = "اینستاگرام ($langName)";
            $attributes["translations.$locale_key.telegram"] = "تلگرام ($langName)";
            $attributes["translations.$locale_key.linkedin"] = "لینکدین ($langName)";
            $attributes["translations.$locale_key.github"] = "گیت هاب ($langName)";
            $attributes["translations.$locale_key.display_title_home_sidebars"] = "عنوان نمایشی در سایدبار های خانه ($langName)";
        }

        return $attributes;
    }
}
