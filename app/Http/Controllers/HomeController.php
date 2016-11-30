<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //init
    public function form() {
    	return view('pages.form');
    }

    public function register() {
    	return view('pages.register');
    }
}
