<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffLeaveBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_leave_balance', function (Blueprint $table) {
          $table->id()->length('20');
          $table->integer('staffid')->length('11');
          $table->integer('year')->length('11');
          $table->integer('paid')->length('11')->DEFAULT('0');
          $table->integer('taken')->length('11')->DEFAULT('0');
          $table->integer('balance')->length('11');
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
        Schema::dropIfExists('staff_leave_balance');
    }
}
