<?php

namespace App\Controllers;

class Arsip extends BaseController
{
    public function home()
    {
        return view('arsip/index');
    }
    
    public function dashboard()
    {
        return view('arsip/dashboard');
    }
    
    public function form()
    {
        return view('arsip/form');
    }
    
    public function about()
    {
        return view('arsip/about');
    }
}
