<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollGeneraldeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_generaldeductions', function (Blueprint $table) {
            $table->id()->length('10')->unsigned;
            $table->string('name');
            $table->integer('staff_cat')->length('255');
            $table->integer('branchid')->nullable();
            $table->double('value')->default(255,0);
            $table->string('frequency');
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
        Schema::dropIfExists('finance_payroll_generaldeductions');
    }
}
