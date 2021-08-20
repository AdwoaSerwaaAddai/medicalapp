<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancePayrollHistoricDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payroll_historic_data', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('month');
            $table->integer('status')->length(1);
            $table->integer('createdby')->nullable();
            $table->integer('updated_by')->nullable();
            $table->float('totalamount')->nullable();
            $table->text('affectedstaffids');
            $table->text('affectedchecksum');
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
        Schema::dropIfExists('finance_payroll_historic_data');
    }
}
