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
        Schema::create('pl_emps', function (Blueprint $table) {
             $table->id('pl_emp_id');
            $table->string('pl_emp_name');
            $table->string('pl_emp_email');
            $table->string('pl_emp_phone');
            $table->dateTime('pl_emp_dob');
            $table->text('pl_emp_address');
            $table->string('pl_emp_password');
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
        Schema::dropIfExists('pl_emps');
    }
};
