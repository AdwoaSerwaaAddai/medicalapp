<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_training', function (Blueprint $table) {
            $table->id();
            $table->integer('staffid'); 
            $table->integer('knowledgeareaid');  
            $table->integer('knowledgelevel'); 
            $table->text('topic'); 
            $table->dateTime('date_started'); 
            $table->string('instructor_name',200); 
            $table->integer('status')->lenght('1'); 
            $table->dateTime('date_completed')->nullable();
            $table->integer('created_by');
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
        Schema::dropIfExists('staff_training');
    }
}
