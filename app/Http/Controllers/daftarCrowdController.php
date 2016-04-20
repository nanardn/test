<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class daftarCrowdController extends Controller
{
    //
    public function show(Request $request)
    	{
    		$result = DB::table('pendanaan')->get();
    		return view('daftarCrowd')->with('dana',$result);
   
    }
    public function form(){
    	return view('daftarCrowd');
    }
    public function save(Request $request){
    	$post = $request-> all();
    	$v 	= \Validator::make($request->all(),
    		[
    			'nama_pj'=> 'required',
    			'nama_proyek'=> 'required',
    			'kategori'=> 'required',
    			'total_dana'=> 'required',
    			'deskripsi'=> 'required',
    			'foto_proyek'=> 'required',
    			'foto_pj'=> 'required',
    		]);
    	if($v->fails()){
    		return redirect()->back()->withErrors($v->$errors());
    	}
    	else{
    		$data = array(
    			'nama_pj' => $post['nama_pj'],
    			'nama_proyek' => $post['nama_proyek'],
    			'kategori' => $post['kategori'],
    			'total_dana' => $post['total_dana'],
    			'deskripsi' => $post['deskripsi'],
    			'foto_proyek' => $post['foto_proyek'],
    			'foto_pj' => $post['foto_pj'],
    			);
    		$i =DB ::table('pendanaan')-> insert($data);
    		if($i>0){
    			\Session::flash('message','Record Have  been save success');
    			return redirect('lisCrowd');
    		}
    	}
    }
}

