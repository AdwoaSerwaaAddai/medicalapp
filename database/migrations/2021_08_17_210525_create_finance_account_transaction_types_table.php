<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceAccountTransactionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_account_transaction_types', function (Blueprint $table) {
            $table->Biginteger('typeid');
            $table->string('typename',50);
            $table->string('description',500)->nullable();
            $table->integer('status')->length('1')-> DEFAULT('1');
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
        Schema::dropIfExists('finance_account_transaction_types');
    }
}
