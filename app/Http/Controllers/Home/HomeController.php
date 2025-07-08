<?php

namespace App\Http\Controllers\Home;

use App\Models\AboutMe;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public $setting;

    public function __construct() {
        $this->setting = Setting::first();
    }

    // disable page if not activated method
    public function checkNotActivatedPage($value) {
        if($this->setting && $this->setting->getTranslation($value) && $this->setting->getTranslation($value) !== 'active') {
            abort(403);
        }
    }

    public function index()
    {
        return view('home.index');
    }

    public function about() {

        // disable page if not activated
        $this->checkNotActivatedPage('show_about_me_menu_btn');

        $about_me = AboutMe::first();
        return view('home.about' , compact('about_me'));
    }

    public function services()
    {
        // disable page if not activated
        $this->checkNotActivatedPage('show_services_menu_btn');

        return view('home.services');
    }

    public function works()
    {
        // disable page if not activated
        $this->checkNotActivatedPage('show_works_menu_btn');

        return view('home.works');
    }

    public function contact() {
        // disable page if not activated
        $this->checkNotActivatedPage('show_contact_menu_btn');

        return view('home.contact');
    }
}
