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
        Schema::create('cl_emps', function (Blueprint $table) {
          
            $table->id('cl_emp_id');
            $table->string('cl_emp_name');
            $table->string('cl_emp_email');
            $table->string('cl_emp_phone');
            $table->dateTime('cl_emp_dob');
            $table->text('cl_emp_address');
            $table->string('cl_emp_password');
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
        Schema::dropIfExists('cl_emps');
    }
};
