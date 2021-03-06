<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Residents;
use App\Services;
use Sentinel;

class AdminController extends Controller
{
    //
    public function index() {
        $residents = Residents::all();
        $services = Services::all();
    	return view('admin.index')->with(compact('residents','services'));
    }

    public function register() {
        return view('pages.register');
    }

    public function postRegister(Request $request) {
        $user = Sentinel::registerAndActivate($request->all());
        return redirect('/');
    }
}
