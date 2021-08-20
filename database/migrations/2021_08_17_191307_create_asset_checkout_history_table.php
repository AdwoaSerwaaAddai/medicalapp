<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetCheckoutHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_checkout_history', function (Blueprint $table) {
            $table->id();
            $table->integer('assetid');
            $table->dateTime('checkoutdate');
            $table->dateTime('expectedcheckindate')->nullable();
            $table->integer('createdby');
            $table->integer('updatedby')->nullable();
            $table->integer('status');
            $table->text('notes');
            $table->text('type')->comment('user,asset or location');
            $table->integer('typeid')->nullable();
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
        Schema::dropIfExists('asset_checkout_history');
    }
}
