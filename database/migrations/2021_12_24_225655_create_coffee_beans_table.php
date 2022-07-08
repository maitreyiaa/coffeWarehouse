<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeBeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee_beans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level');
            $table->decimal('harga');
            $table->string('proses');
            $table->string('ketinggian');
            $table->string('variasi');
            $table->string('asal');
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
        Schema::dropIfExists('coffee_beans');
    }
}
