<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_invoice', function (Blueprint $table) {
            $table->biginteger('invoiceid')->length('20');
            $table->integer('customerid');
            $table->float('discount')->nullable();
            $table->float('discountamount')->nullable();
            $table->float('totalamount')->nullable();
            $table->double('amountpayable')->nullable();
            $table->double('balancepayable')->nullable();
            $table->dateTime('estimatedate')->nullable();
            $table->dateTime('expirydate')->nullable();
            $table->string('estimatenumber',250)->nullable();
            $table->float('xcrate')->DEFAULT('1');
            $table->string('currency',10)->DEFAULT('GHS');
            $table->string('ponumber',250)->nullable();
            $table->integer('branchid');
            $table->integer('created_by')->nullable();
            $table->integer('lastupdatedby')->nullable();
            $table->integer('status')->length('1')->nullable();
            $table-> integer('clientbilled')->length('1')-> DEFAULT('0')->nullable();
            $table->integer('companyid')->nullable(); 
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
        Schema::dropIfExists('finance_invoice');
    }
}
