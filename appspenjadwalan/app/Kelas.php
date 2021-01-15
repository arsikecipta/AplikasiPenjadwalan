<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='kelas';
    protected $fillable = ['kelas','angkatan'];
    public function ksm(){
        //setiap profil memiliki satu mahasiswa
        return $this->belongsTo(Ksm::class);
      }}
