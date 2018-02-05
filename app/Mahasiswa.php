<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswas';
    protected $fillable=array('nama','nis','id_dosen','id_jurusan');

  public function dosen()
    {
    	return $this->belongsTo('App\Dosen','id_dosen');
    }
        public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','id_jurusan');
    }
   
}