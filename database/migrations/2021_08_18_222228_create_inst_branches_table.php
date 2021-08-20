<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inst_branches', function (Blueprint $table) {
            $table->increments('branchid');
            $table->integer('companyid')->nullable();
            $table->string('branchname',250);
            $table->text('description');
            $table->string('email',150);
            $table->string('tel',50)->nullable();
            $table->string('mobile',50)->nullable();
            $table->integer('created_by')->nullable();
            $table->string('branchcode',50)->nullable();
            $table->date('date_established')->nullable();
            $table->string('location',100)->nullable();
            $table->integer('departmentid')->nullable();
            $table->string('address',300)->nullable();
            $table->integer('status')->length(1)->nullable();
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
        Schema::dropIfExists('inst_branches');
    }
}
