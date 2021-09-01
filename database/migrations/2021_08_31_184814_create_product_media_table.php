<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_media', function (Blueprint $table) {
            $table->id();


            $table->string('media')->nullable();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
    
            
            
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('order')->nullable();


            $table->foreignId('product_id')->nullable()->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->string('seo_title')->nullable();

            $table->string('seo_description')->nullable();

            $table->string('seo_keywords')->nullable();
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
        Schema::dropIfExists('product_media');
    }
}
