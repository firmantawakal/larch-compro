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
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->text('kota')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('jenis_pembangunan')->nullable();
            $table->boolean('issame_location')->default(1);
            $table->text('alamat_lokasi')->nullable();
            $table->text('kota_lokasi')->nullable();
            $table->integer('luas_lebar')->nullable();
            $table->integer('luas_panjang')->nullable();
            $table->text('file')->nullable();
            $table->string('status')->default(1);
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
