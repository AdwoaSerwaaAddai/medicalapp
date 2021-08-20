<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_invoice_items', function (Blueprint $table) {
            $table->increments('id')->length('20');
            $table->biginteger('invoiceid')->length('20');
            $table->string('itemname',500);
            $table->integer('quantity');
            $table->double('unitprice');
            $table->float('itemdiscount')->DEFAULT(0);
            $table->double('amount');
            $table->double('taxamount')->nullable();
            $table->string('taxvalue')->nullable();
            $table->string('taxjson',500)->nullable();
            $table->string('taxapplied')->nullable();
            $table->float('padding')->nullable();
            $table->integer('status')->DEFAULT('1');
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
        Schema::dropIfExists('finance_invoice_items');
    }
}
