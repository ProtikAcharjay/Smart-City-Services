<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleaners', function (Blueprint $table) {
            $table->id('cl_id');
            $table->string('cl_name');
            $table->string('cl_phone');
            $table->text('cl_address');
            $table->dateTime('cl_dob');
            $table->string('cl_salary');
            $table->string('cl_nid');
            $table->string('cl_joblocation');
            $table->boolean('cl_status');
           
            
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
        Schema::dropIfExists('cleaners');
    }
};
