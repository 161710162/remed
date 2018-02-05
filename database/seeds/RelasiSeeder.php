<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Jurusan;
use App\Dosen;
use App\Wali;
use App\Matakuliah;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('dosens')->delete(); 
        DB::table('jurusans')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('matakuliahs')->delete();


         $dosen1 = Dosen::create(array(
            'nama' => 'Jake','nipd'=>'23143','alamat'=>'ciawi','mata_kuliah'=>'B.Inggris'
        ));

           $dosen2 = Dosen::create(array(
            'nama' => 'Mimin','nipd'=>'6472','alamat'=>'cibaduyut','mata_kuliah'=>'B.Indonesia'
        ));
            $this->command->info('data dosen sudah diisi!!');


             $a = Jurusan::create(array(
            'nama_jurusan'=>'Teknik Kendaraan Ringan'
         ));
              $b = Jurusan::create(array(
            'nama_jurusan'=>'Teknik Sepeda Motor'
         ));
               $c = Jurusan::create(array(
            'nama_jurusan'=>'Rekayasa Perangkat Lunak'
         ));
               $this->command->info('data jurusan sudah diisi!!');



         $wa = Mahasiswa::create(array(
        'nama'=> 'rendi','nis'=>'2321','id_dosen'=>$dosen1->id,'id_jurusan'=> $a->id
        ));
          $gi = Mahasiswa::create(array(
        'nama'=> 'andy','nis'=>'0284','id_dosen'=>$dosen2->id,'id_jurusan'=> $c->id
        ));
           $rd = Mahasiswa::create(array(
        'nama'=> 'boby','nis'=>'86454','id_dosen'=>$dosen1->id,'id_jurusan'=> $b->id
        ));
            $this->command->info('data mahasiwa sudah diisi!!');


        Wali::create(array('nama'=>'Surya','alamat'=>'Cibeureum','id_mahasiswa'=>$gi->id
        ));
        Wali::create(array('nama'=>'Titin','alamat'=>'Sayati','id_mahasiswa'=>$wa->id
        ));
         Wali::create(array('nama'=>'Ahmad','alamat'=>'sukamenak','id_mahasiswa'=>$rd->id
        ));
          $this->command->info('data wali sudah diisi!!');
       

    $inggris = Matakuliah::create(array('nama_matkul'=>'B.Inggris','kkm'=>'76'));
    $indo = Matakuliah::create(array('nama_matkul'=>'B.Indonesia','kkm'=>'78'));

    $wa->Matakuliah()->attach($inggris->id);
    $gi->Matakuliah()->attach($indo->id);
    $rd->Matakuliah()->attach($inggris->id);
    $rd->Matakuliah()->attach($indo->id);
    $this->command->info('data mahasiswa beserta mata kuliah dan kkm sudah diisi!!') ;


    }

}
