<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaffRoleHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taff_role_history', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_role_id');
            $table->integer('staffid');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('status')->length('1');
            $table->integer('createdby');
            $table->integer('updatedby')->nullable();
            $table->text('changereason');
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
        Schema::dropIfExists('taff_role_history');
    }
}
