<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_data', function (Blueprint $table) {
            $table->id()->length('20');
            $table->integer('payrollid');
            $table->integer('staffid');
            $table->string('position',250)->nullable();
            $table->float('basic_salary')->nullable();
            $table->string('allowances',600)->nullable();
            $table->float('gross')->nullable(); 
            $table->float('totalgross')->nullable(); 
            $table->float('SSNIT_employer')->nullable(); 
            $table->float('SSNIT_staff')->nullable();
            $table->float('third_tier')->nullable();
            $table->float('taxable_income')->nullable();
            $table->float('income_tax')->nullable();
            $table->string('taxid')->nullable();
            $table->float('overtime_tax')->nullable();
            $table->float('total_deductions')->nullable();
            $table->text('deductionsarray');
            $table->text('incomesarray');
            $table->float('net_salary')->nullable();
            $table->float('other_deductions')->nullable();
            $table->float('loanamount')->nullable();
            $table->float('rebursement')->nullable();
            $table->float('total_net')->nullable();
            $table->integer('prepared_by')->nullable();
            $table->dateTime('prepared_on')->nullable();
            $table->integer('flagged')->length('1')->nullable();
            $table->integer('flagged_by')->nullable();
            $table->dateTime('approved_on')->nullable();
            $table->dateTime('approved_by')->nullable();
            $table->string('bank_name',200)->nullable();
            $table->string('acc_branch',200)->nullable();
            $table->string('acc_name',400)->nullable();
            $table->string('acc_sortcode',50)->nullable();
            $table->string('staff_category',250)->nullable();
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
        Schema::dropIfExists('finance_payroll_data');
    }
}
