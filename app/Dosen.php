<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table ='dosens';
    protected $fillable = array('nama','nipd','alamat','mata_kuliah');

     	public function mahasiswa()
    {
    	return $this->hasMany('App\Mahasiswa','id_dosen');
    }

}
