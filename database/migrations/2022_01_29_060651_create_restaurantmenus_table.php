<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantmenus', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->double('price',8,2);
            $table->longText('description')->nullable();
            $table->unsignedInteger('category_id')->constrained('restaurant_menu_categories')->onDelete('cascade');
            $table->string('status');
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
        Schema::dropIfExists('restaurantmenus');
    }
}
