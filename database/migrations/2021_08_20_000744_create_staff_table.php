<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            
            $table->date('soa')->nullable();
            $table->date('eoa')->nullable(); 
            $table->date('dofa')->nullable(); 
            $table->integer('emp_type')->length('11')->nullable(); 
            $table->integer('status')->length('11')->default('0'); 
            $table->string('ssn',50)->nullable(); 
            $table->string('gender',20)->nullable();
            $table->string('cNumber',15)->nullable();
            $table->string('pNumber',15)->nullable();
            $table->string('cEmail',150)->nullable(); 
            $table->string('pEmail',150)->nullable(); 
            $table->string('address',255)->nullable(); 
            $table->text('picture');
            $table->string('tin',20)->nullable();
            $table->integer('created_by')->length('4')->nullable();
            $table->integer('deleted_by')->length('4')->nullable(); 
            $table->dateTime('deleted_on')->nullable();
            $table->string('title',255)->nullable(); 
            $table->string('marital_status',255)->nullable(); 
            $table->dateTime('creation_reviewed_on')->nullable();
            $table->integer('creation_reviewed_by')->length('11')->nullable();
            $table->integer('approvedby')->length('11')->nullable();
            $table->dateTime('approvedon')->nullable();
            $table->integer('approvalstatus')->length('11')->default('0');  
            $table->string('employee_id',200)->nullable();
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
        Schema::dropIfExists('staff');
    }
}
