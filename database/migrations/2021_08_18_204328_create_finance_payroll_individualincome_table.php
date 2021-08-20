<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollIndividualincomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_individualincome', function (Blueprint $table) {
            $table->id()->length('10')->unsigned();
            $table->string('name',255);
            $table->integer('staffid')->length('255');
            $table->double('value',255,0);
            $table-> string('frequency',50);
            $table-> string('welfare',150)->nullable();
            $table->string('pensionscheme',150)->nullable();
            $table->string('tax',150)->nullable();
            $table->string('allowance',150)->nullable();
            $table->string('description',150)->nullable();
            $table->string('status',150)->nullable();
            $table->integer('created_by')->length('255')->nullable();
            $table->integer('lastupdated_by')->length('255')->nullable();
            $table->integer('incometype')->nullable();
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
        Schema::dropIfExists('finance_payroll_individualincome');
    }
}
