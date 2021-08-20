<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceAccountgeneratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_accountgenerator', function (Blueprint $table) {
            $table->id();
            $table->string('prefix',20)->nullable;
            $table->string('type',20);
            $table->integer('suffix')->Length(20)->UNSIGNED()->nullable;
            $table->integer('status')->Length(1)->UNSIGNED();
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
        Schema::dropIfExists('finance_accountgenerator');
    }
}