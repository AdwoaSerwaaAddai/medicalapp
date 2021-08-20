<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inst_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name',300);
            $table->string('address',400)->nullable();
            $table->string('location',150)->nullable();
            $table->string('tel',30)->nullable();
            $table->string('email',150)->nullable();
            $table->integer('status')->length('1')->nullable();
            $table->integer('parent')->default('0');
            $table->string('logopath',150);
            $table->string('abbreviation',50);
            $table->integer('mainbranchid');
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
        Schema::dropIfExists('inst_companies');
    }
}
