<?php

namespace App\Http\Controllers;

use App\listCrowd;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class listCrowdController extends Controller
{
    //
    public function show(Request $request)
    	{
    		$result = DB::table('pendanaan')->get();
    		return view('listCrowd')->with('dana',$result);
   
    }
}
