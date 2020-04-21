<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alamat;

class Orang extends Model
{
    protected $table = 't_orang';
    protected $hidden = ['posisi_type','posisi_id','created_at','updated_at'];

    public function posisi(){
        return $this->morphTo();
    }

    public function alamat(){
        return $this->hasOne('App\Alamat','orang_id');
    }
}