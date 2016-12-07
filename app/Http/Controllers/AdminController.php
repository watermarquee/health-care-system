<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;

class AdminController extends Controller
{
    //
    public function index() {
    	return view('admin.index');
    }

    public function register() {
        return view('pages.register');
    }

    public function postRegister(Request $request) {
        $user = Sentinel::registerAndActivate($request->all());
        return redirect('/');
    }
}
