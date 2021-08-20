<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_qualifications', function (Blueprint $table) {
            $table->id()->length('10')->UNSIGNED();
            $table->integer('sid');
            $table->string('institution');  
            $table->integer('start_monthy')->nullable();
            $table->integer('start_year`')->nullable();
            $table->integer('end_month')->nullable(); 
            $table->integer('end_year')->nullable(); 
            $table->string('area',500)->nullable();
            $table->text('uploadedfile');
            $table->string('award');  
            $table->integer('created_by')->length('255')->nullable();
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
        Schema::dropIfExists('staff_qualifications');
    }
}
