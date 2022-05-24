<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();


            $table->string('name_ar')->nullable();

            $table->string('name_en')->nullable();



            $table->string('info_ar')->nullable();
            $table->string('info_en')->nullable();

            $table->string('image_ar')->nullable();
            $table->string('pdf')->nullable();
            $table->string('image_en')->nullable();



            $table->string('logo')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();




            $table->string('seo_title_en')->nullable();

            $table->string('seo_description_en')->nullable();

            $table->string('seo_keywords_en')->nullable();

            $table->string('seo_title_ar')->nullable();

            $table->string('seo_description_ar')->nullable();

            $table->string('seo_keywords_ar')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('departments');
    }
}
