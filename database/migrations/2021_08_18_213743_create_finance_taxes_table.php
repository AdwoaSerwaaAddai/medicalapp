<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_taxes', function (Blueprint $table) {
            $table->id();
            $table->integer('taxid');
            $table->string('taxname',255);
            $table->string('shortname',20)->nullable(); 
            $table->string('value',200)->nullable();
            $table->integer('compounds')->length(1)->DEFAULT('0');
            $table->integer('direct')->length(1)->DEFAULT('0');
            $table->integer('created_by');
            $table->integer('status')->length(1)->DEFAULT('1'); 
            $table->string('type',20)->nullable();
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
        Schema::dropIfExists('finance_taxes');
    }
}
