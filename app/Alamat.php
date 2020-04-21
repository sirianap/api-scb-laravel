<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $hidden = ['orang_id','id','created_at','updated_at'];
    protected $table = 't_alamat';
}