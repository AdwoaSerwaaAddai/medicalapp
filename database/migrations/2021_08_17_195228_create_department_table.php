<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->Length(19)->UNSIGNED()->nullable();
            $table->text('name');
            $table->integer('status')->Length(19)->UNSIGNED()->DEFAULT('1');
            $table->integer('creator_id')->Length(19)->UNSIGNED()->nullable();
            $table->integer('parent_id')->Length(19)->UNSIGNED()->nullable();
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
        Schema::dropIfExists('department');
    }
}
