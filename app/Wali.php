<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
   protected $table='walis';
   protected $fillable=array('nama','alamat','id_mahasiswa');   

   public function mahasiswa() 
   {
		return $this->belongsTo('App\Mahasiswa','id_Mahasiswa');
	}
}
