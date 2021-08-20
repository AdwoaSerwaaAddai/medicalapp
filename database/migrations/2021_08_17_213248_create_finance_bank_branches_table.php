<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceBankBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_bank_branches', function (Blueprint $table) {
            $table->Biginteger('id');
            $table->string('branchname',250);
            $table->string('sortcode',10);
            $table->integer('bankid');
            $table->integer('status')->length('1');
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
        Schema::dropIfExists('finance_bank_branches');
    }
}
