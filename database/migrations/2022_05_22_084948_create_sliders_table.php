<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            $table->string('image_ar')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->string('image_en')->nullable();


            $table->string('lg_text_ar')->nullable();
            $table->string('lg_text_en')->nullable();

            $table->string('sm_text_ar')->nullable();
            $table->string('sm_text_en')->nullable();




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
        Schema::dropIfExists('sliders');
    }
}
