<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    //
    public function store(Request $request) {

    	$input = $request->all();
    	Services::create($input);
    	return redirect()->back();
    }
}
