<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orang;

class Siswa extends Model
{
    protected $table = 't_siswa';
    protected $hidden = ['pin','created_at','updated_at','id'];
    
    public function orang()
    {
        return $this->morphOne('App\Orang', 'posisi');
    }
}