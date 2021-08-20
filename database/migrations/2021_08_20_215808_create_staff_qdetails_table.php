<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffQdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_qdetails', function (Blueprint $table) {
            $table->id()->length('10')->UNSIGNED();
            $table->integer('sid')->nullable();
            $table->string('name')->nullable();  
            $table->string('institution')->nullable();  
            $table->date('start')->nullable();  
            $table->date('end')->nullable(); 
            $table->string('status')->nullable();
            $table->string('award')->nullable(); 
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
        Schema::dropIfExists('staff_qdetails');
    }
}
