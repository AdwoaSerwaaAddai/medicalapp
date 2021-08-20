<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFullnameInStaffEmploymentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff_employment_types', function (Blueprint $table) {
            //renaming fullname column to emp_type
            $table->renameColumn('fullname','emp_type'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff_employment_types', function (Blueprint $table) {
            //
        });
    }
}
