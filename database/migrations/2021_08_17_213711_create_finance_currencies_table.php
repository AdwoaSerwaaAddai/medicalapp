<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_currencies', function (Blueprint $table) {
            $table->Biginteger('id');
            $table->string('sign',10)->nullable();
            $table->string('name',50);
            $table->double('rate')->nullable();
            $table->integer('status')->length('1')->nullable();
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
        Schema::dropIfExists('finance_currencies');
    }
}
