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
        Schema::create('section7', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subtitle')->nullable();
            $table->string('list_a')->nullable();
            $table->string('list_b')->nullable();
            $table->string('list_c')->nullable();
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
