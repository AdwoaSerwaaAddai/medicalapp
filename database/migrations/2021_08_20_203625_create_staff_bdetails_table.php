<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_bdetails', function (Blueprint $table) {
            $table->id();
            $table->integer('sid')->length('10')->unsigned;
            $table->string('fname')->nullable(); 
            $table->date('dob')->nullable();
            $table->string('relation')->nullable(); 
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->nullable();
            $table->integer('created_by')->length('255')->nullable();
            $table->integer('deleted_by')->length('255')->nullable();
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
        Schema::dropIfExists('staff_bdetails');
    }
}
