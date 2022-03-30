<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->nullable();
            $table->integer('capacity')->nullable();
            $table->double('room_price',8,2)->nullable();
            $table->string('status')->nullable();
            $table->integer('floor_number')->nullable();
            $table->longText('description')->nullable();
            $table->string('category')->nullable();
            $table->string('view')->nullable();
            $table->string('bed')->nullable();
            $table->string('room_service')->boolean(false);
            $table->string('wifi')->boolean(false);
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
        Schema::dropIfExists('rooms');
    }
}
