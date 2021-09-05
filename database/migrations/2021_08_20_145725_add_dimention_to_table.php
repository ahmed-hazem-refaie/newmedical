<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDimentionToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('setting_fields', function (Blueprint $table) {
            $table->integer('dim1')->nullable();
            $table->integer('dim2')->nullable();
            $table->string('validation')->nullable();
            $table->string('validation_msg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting_fields', function (Blueprint $table) {
            //
        });
    }
}
