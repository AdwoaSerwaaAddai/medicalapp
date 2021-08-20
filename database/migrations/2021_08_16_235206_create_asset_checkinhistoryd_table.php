<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetCheckinhistorydTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_checkinhistory', function (Blueprint $table) {
            $table->id();
            $table->integer('checkoutid'); 
            $table->dateTime('checkindate');
            $table->dateTime('expectedcheckindate')->nullable();
            $table->integer('createdby');
            $table->integer('updatedby');
            $table->integer('status')->nullable();
            $table->text('notes');
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
        Schema::dropIfExists('asset_checkinhistory');
    }
}
