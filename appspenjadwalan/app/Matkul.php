<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table='matkul';
    protected $fillable = ['kode_mk','nama_mk','sks','semester','tahun'];
}
