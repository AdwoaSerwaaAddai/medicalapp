<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id()->length('10')->unsighed();
            $table->string('menu_text',50);
            $table->string('url',300);
            $table->string('description',300)->nullable();
            $table->integer('status')->lenght('1')->DEFAULT('0');
            $table->integer('parentID')->lenght('4')->DEFAULT('0');
            $table->string('iconclass',300)->DEFAULT('fa fa-angle-double-right');
            $table->string('pageID',50)->DEFAULT('create');
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
        Schema::dropIfExists('links');
    }
}
