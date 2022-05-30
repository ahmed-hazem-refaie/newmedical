<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('image_ar')->nullable();
            $table->string('image_en')->nullable();     
            $table->tinyInteger('status')->default(1)->nullable();        
            $table->string('seo_title_en')->nullable();
            $table->string('seo_description_en')->nullable();
            $table->string('seo_keywords_en')->nullable();
            $table->string('seo_title_ar')->nullable();
            $table->string('seo_description_ar')->nullable();
            $table->string('seo_keywords_ar')->nullable();
            $table->foreignId('category_id')->constrained('categories','id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('blogs');
    }
}
