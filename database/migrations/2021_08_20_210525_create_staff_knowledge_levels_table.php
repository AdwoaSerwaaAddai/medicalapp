<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffKnowledgeLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_knowledge_levels', function (Blueprint $table) {
            $table->id()->length('11');
            $table->string('name',50);
            $table->integer('value')->length('1');
            $table->integer('status')->length('1');
            $table->integer('createdby')->length('1');
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
        Schema::dropIfExists('staff_knowledge_levels');
    }
}
