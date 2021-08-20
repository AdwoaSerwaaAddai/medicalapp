<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffDependantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_dependants', function (Blueprint $table) {
            $table->id();
            $table->integer('sid')->length('11')->unsigned;
            $table->string('fullname'); 
            $table->date('age')->nullable();
            $table->string('relation',50)->nullable(); 
            $table->string('mobile',20)->nullable();
            $table->string('email',150)->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->length('1')->nullable();
            $table->integer('created_by')->length('4')->nullable();
            $table->integer('updated_by')->length('4')->nullable();
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
        Schema::dropIfExists('staff_dependants');
    }
}
