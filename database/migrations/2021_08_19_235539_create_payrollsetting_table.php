<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrollsetting', function (Blueprint $table) {
            $table->id()->length('10')->usigned();
            $table->string('name')->nullable();
            $table->string('percentage')->nullable(); 
            $table->string('description')->nullable(); 
            $table->string('status')->nullable();  
            $table->integer('created_by')->length('255')->nullable();
            $table->integer('deleted_by')->length('255')->nullable();
            $table->dateTime('deleted_on')->nullable();
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
        Schema::dropIfExists('payrollsetting');
    }
}
