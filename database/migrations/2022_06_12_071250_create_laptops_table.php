<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('product');
            $table->string('type_name');
            $table->string('inches');
            $table->string('screen_resolution');
            $table->string('cpu');
            $table->string('ram');
            $table->string('memory');
            $table->string('gpu');
            $table->string('operating_system');
            $table->string('weight');
            $table->string('price_euros');
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
        Schema::dropIfExists('laptops');
    }
}
