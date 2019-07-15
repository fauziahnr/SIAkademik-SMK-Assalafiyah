<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
      return view('ui.home');
    }

    public function about()
    {
      return view('ui.about');
    }

    public function register()
    {
      return view('ui.register');
    }

    public function postregister(Request $request)
    {
      dd($request->all());
      //return view($);
    }

    public function singlepost($slug)
    {
      
    }
}
