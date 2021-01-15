<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akunlaboran extends Model
{
    protected $table='akunlaboran';
    protected $fillable = ['email','nama_lengkap','username','password','user_id'];
}
