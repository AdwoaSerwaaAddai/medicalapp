<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffLeaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_leave', function (Blueprint $table) {
            $table->id()->length('11');
            $table->integer('staffid')->length('11');
            $table->integer('type')->length('11');
            $table->integer('duration')->length('11');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('resumption_date');
            $table->integer('approval_balance')->length('11')->nullable();
            $table->integer('created_by')->length('11');
            $table->string('hod_comment',250)->nullable(); 
            $table->date('hod_date')->nullable();
            $table->date('rev_date')->nullable(); 
            $table->string('rev_comment',250)->nullable();  
            $table->text('staff_comment');
            $table->integer('sup_id')->length('11')->nullable();  
            $table->text('relievermsg');
            $table->integer('relieverid')->length('11')->nullable(); 
            $table->integer('s_status')->length('5');
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
        Schema::dropIfExists('staff_leave');
    }
}
