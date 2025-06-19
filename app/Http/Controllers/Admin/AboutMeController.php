<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;
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
        $about_me = AboutMe::first();

        // update data with multi language
        // dd($request->input('translations', []));
        foreach ($request->input('translations', []) as $locale => $fields) {
            foreach ($fields as $field => $value) {
                $file = $request->file("translations.$locale.$field");

                if ($file instanceof \Illuminate\Http\UploadedFile) {
                    $about_me->setTranslation($field, $file, $locale);
                } else {
                    $about_me->setTranslation($field, $value, $locale);
                }
            }
        }

        // show success message after updated data and back
        Alert::success('ویرایش موفق', 'اطلاعات با موفقیت ذخیره شد')->showConfirmButton('باشه', '#6576ff')->autoClose(5000);
        return back();
    }
}
