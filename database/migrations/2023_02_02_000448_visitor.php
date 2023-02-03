<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('kota');
            $table->string('jenis_pembangunan');
            $table->integer('lokasi_pembangunan')->default(1);
            $table->text('alamat_lokasi');
            $table->string('kota_lokasi');
            $table->string('luas_tanah1');
            $table->string('luas_tanah2');
            $table->text('file');
            $table->rememberToken();
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
        //
    }
};
