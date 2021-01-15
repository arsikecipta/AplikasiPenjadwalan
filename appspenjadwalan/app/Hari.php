<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jam;
use App\Ksm;
class Hari extends Model
{
   
    protected $table='hari';
    protected $fillable = ['nama_hari'];

    public function jam(){
        return $this->belongsToMany('App\Jam');
    }
    public function ksm()
    {
        return $this->belongsTo(Ksm::class, 'hari','id');
    }
}