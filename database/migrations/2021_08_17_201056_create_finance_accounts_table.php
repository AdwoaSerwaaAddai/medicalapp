<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('accountid');
            $table->string('name',150);
            $table->string('number',10)->nullable();
            $table->text('description');
            $table->double('balance'); 
            $table->integer('status')->length('1')->DEFAULT('1')->COMMENT('Whether account is enable,disabled or deleted or suspended'); 
            $table->string('ownertype',20)->nullable();
            $table->integer('ownerid')->nullable;
            $table->integer('accounttypeid')->nullable;
            $table->integer('branchid');
            $table->integer('created_by')->length('6')->nullable; 
            $table->integer('updated_by')->length('6')->nullable; 
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
        Schema::dropIfExists('finance_accounts');
    }
}
