<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inst_department', function (Blueprint $table) {
            $table->id()->length('19');
            $table->integer('companyid')->length('19')->nullable;
            $table->string('code',50)->nullable();
            $table->text('name');
            $table->integer('status')->length('1')->DEFAULT('1');
            $table->integer('creator_id')->length('19')->nullable;
            $table->integer('parentid')->length('19')->nullable;
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
        Schema::dropIfExists('inst_department');
    }
}
