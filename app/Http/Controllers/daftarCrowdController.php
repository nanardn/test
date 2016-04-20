<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class daftarCrowdController extends Controller
{
    //
    public function show(Request $request)
    	{
    		$result = DB::table('pendanaan')->get();
    		return view('daftarCrowd')->with('dana',$result);
   
    }
}
