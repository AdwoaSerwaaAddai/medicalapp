<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkCatChangeLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_cat_change_log', function (Blueprint $table) {
            $table->id()->length('11');
            $table->integer('linkid');
            $table->integer('catid')->length('11');
            $table->integer('userid')->length('11');
            $table->integer('status')->length('11');
            $table->string('ipaddress',50)->nullable;
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
        Schema::dropIfExists('link_cat_change_log');
    }
}
