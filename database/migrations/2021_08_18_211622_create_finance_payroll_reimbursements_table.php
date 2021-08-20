<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollReimbursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_reimbursements', function (Blueprint $table) {
            $table->id();
            $table->float('amount');
            $table->text('desc');
            $table->integer('staffid');
            $table->integer('year_payable')->nullable();
            $table->integer('month_payable')->nullable();
            $table->boolean('istaxable',TRUE)->nullable()->DEFAULT('0');
            $table->integer('status')->length('2');
            $table->integer('paidpayrollid')->nullable();
            $table->text('receipt');
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('finance_payroll_reimbursements');
    }
}
