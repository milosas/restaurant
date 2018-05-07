<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->increments('id'); // visada pirmas

            $table->string('title');
            $table->text('description');
            $table->string('image_url');
            $table->float('price',99,2);
            $table->integer('main_id')->unsigned();
            $table->foreign('main_id')->references('id')->on('mains')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps(); // visada paskutinis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
