<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about() {
        return view('home.about');
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
