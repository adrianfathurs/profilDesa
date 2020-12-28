<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmPicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkm_pics', function (Blueprint $table) {
            $table->bigIncrements('id_umkm_pic');
            $table->string('title');
            $table->string('pics');
            $table->unsignedBigInteger('fk_umkm_id');
            $table->foreign('fk_umkm_id')->references('id_umkm')->on('umkms');
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
        Schema::dropIfExists('umkm_pics');
    }
}
