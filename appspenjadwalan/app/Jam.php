<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ksm;
class Jam extends Model
{
    protected $table='jam';
    protected $fillable = ['jam_mulai','jam_berakhir','rentang'];
    
    public function ksm(){
    return $this->hasMany('App\Ksm', 'id');
    }
    
}
