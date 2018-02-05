<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
   protected $table='matakuliahs';
    protected $fillable =array ('nama_matkul','kkm');

     public function mahasiswa()
    {
    	return $this->belongsToMany('App\Mahasiswa','matkul_mahasiswa','id_mahasiswa','id_mata_kuliah');
    }

}
