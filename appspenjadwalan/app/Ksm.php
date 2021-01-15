<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ksm extends Model
{
    protected $table='jadwalksm';
    protected $fillable = ['hari','jam_mulai','jam_berakhir','kelas','ruangan','kode_mk','nama_mk','sks','semester','tahun'];

    public function hari()
    {
        return $this->hasMany(Hari::class,'hari','id');
    }
    public function kelas(){
        return $this->hasMany(Kelas::class, 'kelas');
    
    }
}
