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
        Schema::create('plumbers', function (Blueprint $table) {
            $table->id('pl_id');
            $table->string('pl_name');
            $table->string('pl_phone');
            $table->text('pl_address');
            $table->dateTime('pl_dob');
            $table->string('pl_salary');
            $table->string('pl_nid');
            $table->string('pl_joblocation');
            $table->boolean('pl_status');
           
            
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
        Schema::dropIfExists('plumbers');
    }
};
