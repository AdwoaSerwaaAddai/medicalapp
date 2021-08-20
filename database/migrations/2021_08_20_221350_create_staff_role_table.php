<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_role', function (Blueprint $table) {
            $table->id()->length('10')->UNSIGNED();
           
            $table->string('name')->nullable();
            $table->integer('departmentid')->DEFAULT('0'); 
            $table->string('description')->nullable(); 
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
        Schema::dropIfExists('staff_role');
    }
}
