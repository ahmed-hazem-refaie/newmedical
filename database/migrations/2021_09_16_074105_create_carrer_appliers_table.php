<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerAppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrer_appliers', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('faculty')->nullable();
            $table->string('grade')->nullable();
            $table->string('cv')->nullable();
            $table->string('help')->nullable();
            $table->string('gender')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->tinyInteger('seen')->default(0);


            $table->foreignId('carrer_id')->constrained('carrers','id')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('carrer_appliers');
    }
}
