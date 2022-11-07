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
        Schema::create('electricians', function (Blueprint $table) {
            $table->id('el_id');
            $table->string('el_name');
            $table->string('el_phone');
            $table->text('el_address');
            $table->dateTime('el_dob');
            $table->string('salary');
            $table->string('el_nid');
            $table->string('el_joblocation');
            $table->boolean('el_status');


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
        Schema::dropIfExists('electricians');
    }
};
