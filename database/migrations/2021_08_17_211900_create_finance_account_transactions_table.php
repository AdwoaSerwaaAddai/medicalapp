<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceAccountTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_account_transactions', function (Blueprint $table) {
            $table->id();
            $table-> integer('txid');      
            $table->string('code',50)->nullable();
            $table->integer('credit_account_id')->DEFAULT('0');
            $table->integer('debit_account_id');
            $table->string('chequenumber',50)->nullable(); 
            $table->text('narration');
            $table->text('paymentmethod');
            $table->double('amount');
            $table->dateTime('transaction_date');
            $table->integer('txn_typeid')->nullable();
            $table->integer('prepared_by')->length('20');
            $table->integer('authorized_by')->length('20')->nullable();
            $table->dateTime('authorized_date')->nullable();
            $table->integer('updatedby')->nullable();
            $table->dateTime('prepared_date');
            $table->string('status')->nullable()->DEFAULT('Active');
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
        Schema::dropIfExists('finance_account_transactions');
    }
}
