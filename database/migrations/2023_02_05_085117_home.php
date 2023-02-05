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
        Schema::create('home', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section1_title')->nullable();
            $table->string('section1_subtitle1')->nullable();
            $table->text('section1_content1')->nullable();
            $table->string('section1_subtitle2')->nullable();
            $table->text('section1_content2')->nullable();

            $table->string('section2_title1')->nullable();
            $table->string('section2_title2')->nullable();
            $table->string('section2_subtitle1')->nullable();
            $table->text('section2_content1')->nullable();
            $table->text('section2_image1')->nullable();
            $table->string('section2_subtitle2')->nullable();
            $table->text('section2_content2')->nullable();
            $table->text('section2_image2')->nullable();

            $table->string('section3_title')->nullable();
            $table->text('section3_image')->nullable();
            $table->text('section3_content')->nullable();

            $table->string('section4_title1')->nullable();
            $table->string('section4_title2')->nullable();
            $table->text('section4_image')->nullable();
            $table->string('section4_list1')->nullable();
            $table->string('section4_list2')->nullable();
            $table->string('section4_list3')->nullable();

            $table->string('section5_title1')->nullable();
            $table->string('section5_title2')->nullable();
            $table->text('section5_image')->nullable();
            $table->string('section5_list1')->nullable();
            $table->string('section5_list2')->nullable();
            $table->string('section5_list3')->nullable();

            $table->string('section6_title1')->nullable();
            $table->string('section6_title2')->nullable();
            $table->text('section6_image')->nullable();
            $table->string('section6_list1')->nullable();
            $table->string('section6_list2')->nullable();
            $table->string('section6_list3')->nullable();

            $table->string('section7_title1')->nullable();
            $table->string('section7_title2')->nullable();
            $table->string('section7_subtitle1')->nullable();
            $table->text('section7_list1_a')->nullable();
            $table->text('section7_list1_b')->nullable();
            $table->text('section7_list1_c')->nullable();
            $table->string('section7_subtitle2')->nullable();
            $table->text('section7_list2_a')->nullable();
            $table->text('section7_list2_b')->nullable();
            $table->text('section7_list2_c')->nullable();
            $table->string('section7_subtitle3')->nullable();
            $table->text('section7_list3_a')->nullable();
            $table->text('section7_list3_b')->nullable();
            $table->text('section7_list3_c')->nullable();

            $table->string('section8_title1')->nullable();
            $table->string('section8_title2')->nullable();

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
