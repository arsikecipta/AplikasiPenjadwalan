<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalksmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalksm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->string('jam_mulai');
            $table->string('jam_berakhir');
            $table->string('kelas');
            $table->string('ruangan');
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->integer('sks');
            $table->string('semester');
            $table->string('tahun');
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
        Schema::dropIfExists('jadwalksm');
    }
}
