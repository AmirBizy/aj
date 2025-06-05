<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $about_me = AboutMe::first();
        return view ('admin.about_me.index' , compact('about_me'));
    }

    public function update(Request $request)
    {
        $about_me = AboutMe::first();

        foreach ($request->input('translations', []) as $locale => $fields) {
            $about_me->translateArray($fields, $locale);
        }

        return back()->with('success', 'اطلاعات با موفقیت ذخیره شد.');
    }
}
