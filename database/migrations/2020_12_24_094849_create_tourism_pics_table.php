<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourismPicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourism_pics', function (Blueprint $table) {
            $table->bigIncrements('id_pics');
            $table->string('title');
            $table->string('pics');
            $table->unsignedBigInteger('fk_tourism_id');
            $table->foreign('fk_tourism_id')->references('id_tourism')->on('tourisms');
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
        Schema::dropIfExists('tourism_pics');
    }
}
