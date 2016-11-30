<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //init
    public function index() {
    	return view('pages.index');
    }

    public function form() {
    	return view('pages.form');
    }
}
