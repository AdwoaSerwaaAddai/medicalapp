<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_medicals', function (Blueprint $table) {
            $table->id();
            $table->integer('staffid')->length('11');
            $table->text('hospital_name');
            $table->double('amount');
            $table->text('receipt');
            $table->date('attended_date');
            $table->integer('created_by');
            $table->date('rev_date');
            $table->string('rev_comment',250)->nullable();
            $table->double('rev_id')->nullable(); 
            $table->text('staff_comment');
            $table->integer('paid')->length('1')->DEFAULT('0');
            $table->double('approval_balance')->nullable(); 
            $table->integer('s_status')->length('1');
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
        Schema::dropIfExists('staff_medicals');
    }
}
