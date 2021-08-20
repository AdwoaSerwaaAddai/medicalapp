<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollIndividualdeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_individualdeductions', function (Blueprint $table) {
            $table->id()->length('10')->unsigned();
            $table->string('name',255);
            $table->integer('staffid')->length('255');
            $table->integer('branchid')->nullable(); 
            $table->double('value',255,0)->nullable();
            $table->string('frequency',50);
            $table->integer('beforetax')->length('1')->nullable(); 
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->integer('created_by')->length('255')->nullable(); 
            $table->integer('lastupdated_by')->length('255')->nullable();
            $table->string('type',50)->nullable();
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
        Schema::dropIfExists('finance_payroll_individualdeductions');
    }
}
