<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsAutoidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_autoids', function (Blueprint $table) {
            $table->id();
            $table->string('suffix',0)->nullable;
            $table->string('prefix',20)->nullable; 
            $table->string('type',50);
            $table->float('seed')->DEFAULT('0'); 
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
        Schema::dropIfExists('settings_autoids');
    }
}
