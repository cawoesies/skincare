<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('skincare.home');
    }

    public function skincare()
    {
        return view('skincare.skincare');
    }

    public function aboutUs()
    {
        return view('skincare.about-us');
    }

    public function ingredients()
    {
        return view('skincare.ingredients');
    }
}
