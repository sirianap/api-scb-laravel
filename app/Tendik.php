<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orang;

class Tendik extends Model
{
    protected $table = 't_tendik';
    protected $hidden = ['created_at','updated_at','id'];
    public function orang()
    {
        return $this->morphOne('App\Orang', 'posisi');
    }
}