<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Asset', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('model_number')->length(19)->unsigned();
            $table->string('tag',150)->nullable();
            $table->string('serial',300)->nullable();
            $table->integer('type')->length(19)->unsigned();
            $table->integer('brand')->length(20)->unsigned();
            $table->integer('quantity')->length(20)->unsigned();
            $table->float('cost')->length(20)->unsigned();
            $table->integer('supplierid')->length(11)->unsigned();
            $table->string('description');
            $table->integer('status')->length(2)->unsigned();
            $table->integer('current_location')->length(11)->unsigned();
            $table->integer('po_number')->length(20)->unsigned();
            $table->text('other_fields');
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
        Schema::dropIfExists('Asset');
    }
}
