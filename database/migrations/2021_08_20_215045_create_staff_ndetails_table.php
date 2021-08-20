<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffNdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_ndetails', function (Blueprint $table) {
            $table->id()->length('10')->UNSIGNED();
           $table->integer('sid')->nullable();
            $table->string('fname')->nullable(); 
            $table->string('relation')->nullable();  
            $table->string('email')->nullable();  
            $table->string('mobile')->nullable(); 
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
        Schema::dropIfExists('staff_ndetails');
    }
}
