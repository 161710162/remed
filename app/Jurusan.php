<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
	protected $table='jurusans';
   protected $fillable = array('nama_jurusan');   

public function mahasiswa()
	{
		return $this->hasMany('App\Mahasiswa','id_jurusan');
	}
  
}
