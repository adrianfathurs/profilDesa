<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactToTourismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tourisms', function (Blueprint $table) {
            $table->string('contact')->nullable();
            $table->string('map_url')->nullable();
            $table->longText('map_api')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tourisms', function (Blueprint $table) {
            $table->dropColumn(['contact']);
            $table->dropColumn(['map_url']);
            $table->dropColumn(['map_api']);
        });
    }
}
