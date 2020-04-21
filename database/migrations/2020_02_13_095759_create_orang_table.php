<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_orang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->set('jenis_kelamin',['L','P']);
            $table->date('tanggal_lahir');
            $table->nullableMorphs('posisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orang');
    }
}
