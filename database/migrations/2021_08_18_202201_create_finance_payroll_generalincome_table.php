<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollGeneralincomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_generalincome', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->integer('staff_cat')->length('255');
            $table->integer('branchid')->nullable();
            $table->double('value')->default(255,0);
            $table->string('frequency');
            $table->string('welfare',150)->nullable();
            $table->string('pensionscheme',150)->nullable();
            $table->string('tax',150)->nullable();
            $table->string('allowance')->nullable();
            $table->string('description')->nullable();
            $table->string('status',255)->nullable();
            $table->integer('created_by')->length('255')->nullable();
            $table->integer('lastupdated_by')->length('255')->nullable();
            $table->integer('incometype')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('finance_payroll_generalincome');
    }
}
