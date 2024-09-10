<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('includes/about');
    }

    public function contacts(){
        return view('includes/contacts');
    }
}
