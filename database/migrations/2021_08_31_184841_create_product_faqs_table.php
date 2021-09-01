<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_faqs', function (Blueprint $table) {
            $table->id();


            $table->string('title')->nullable();
            $table->string('description')->nullable();

            
            
            
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
        Schema::dropIfExists('product_faqs');
    }
}
