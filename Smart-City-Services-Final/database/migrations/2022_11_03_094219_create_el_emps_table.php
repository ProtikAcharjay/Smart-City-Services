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
        Schema::create('el_emps', function (Blueprint $table) {
            $table->id('el_emp_id');
            $table->string('el_emp_name');
            $table->string('el_emp_email');
            $table->string('el_emp_phone');
            $table->dateTime('el_emp_dob');
            $table->text('el_emp_address');
            $table->string('el_emp_password');
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
        Schema::dropIfExists('el_emps');
    }
};
