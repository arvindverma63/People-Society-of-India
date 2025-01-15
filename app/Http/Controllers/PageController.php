<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs(){
        return view('website.about');
    }
    public function donate(){
        return view('website.donate');
    }
    public function contact(){
        return view('website.contact');
    }
}
