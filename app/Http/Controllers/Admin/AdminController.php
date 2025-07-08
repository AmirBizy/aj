<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // return admin panel index page
    public function index()
    {
        return view('admin.index');
    }
}
