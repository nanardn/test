<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftarCrowd extends Model
{
    //
    protected $fillable = $arrayName = array('nama_pj' , 'nama_proyek' , 'kategori' ,'total_dana' , 'deskripsi', 'foto_proyek', 'foto_pj');
     use SoftDeletes;
}
