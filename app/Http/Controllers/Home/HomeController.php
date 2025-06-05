<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about() {
        $about_me = AboutMe::first();
        return view('home.about' , compact('about_me'));
    }

    public function services()
    {
        return view('home.services');
    }

    public function works()
    {
        return view('home.works');
    }

    public function contact() {
        return view('home.contact');
    }
}
