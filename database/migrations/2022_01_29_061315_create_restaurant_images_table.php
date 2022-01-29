<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('restaurantmenu_id')->constrained('restaurantmenus')->onDelete('cascade');
            $table->unsignedInteger('image_id')->constrained('images')->onDelete('cascade');
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
        Schema::dropIfExists('restaurant_images');
    }
}
