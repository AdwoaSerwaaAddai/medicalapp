<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollIndividualloanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_individualloan', function (Blueprint $table) {
            $table->id()->length('10')->UNSIGNED();
            $table->string('staffid',255);
            $table->integer('branchid')->nullable();
            $table->integer('duration')->nullable()->COMMENT('This is the duration of the loan in months');
            $table->float('deductionpercycle')->nullable();
            $table->float('rate')->nullable();
            $table->float('amount',255,0);
            $table->integer('duration_remaining')->nullable();
            $table->float('amount_payable')->nullable();
            $table->string('description',255)->nullable(); 
            $table->string('status',255)->nullable(); 
            $table->integer('created_by')->nullable(); 
            $table->integer('lastupdated_by')->nullable(); 
            $table->string('loantype',50)->nullable();  
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
        Schema::dropIfExists('finance_payroll_individualloan');
    }
}
