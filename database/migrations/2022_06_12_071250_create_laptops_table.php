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
            $table->string('company')->nullable();
            $table->string('memory_type')->nullable();
            $table->string('product')->nullable();
            $table->string('type_name')->nullable();
            $table->string('inches')->nullable();
            $table->string('screen_resolution')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('memory')->nullable();
            $table->string('gpu')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('weight')->nullable();
            $table->string('price_euros')->nullable();
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
