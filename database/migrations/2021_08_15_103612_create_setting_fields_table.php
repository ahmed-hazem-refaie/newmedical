<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_fields', function (Blueprint $table) {
            $table->id();


            $table->string('name')->nullable();
            $table->text('value')->nullable();
            $table->text('help')->nullable();
            $table->integer('type')->nullable();

            $table->tinyInteger('status')->default(1);



            $table->foreignId('setting_id')->constrained('settings','id')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('setting_fields');
    }
}
