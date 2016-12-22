<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Residents;


class ResidentsController extends Controller
{
    //
    public function store(Request $request) {

    	$input = $request->all();
    	Residents::create($input);
    	return redirect()->back();
    }
}
