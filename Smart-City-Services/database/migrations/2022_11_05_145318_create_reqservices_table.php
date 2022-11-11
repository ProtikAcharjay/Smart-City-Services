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
        Schema::create('reqservices', function (Blueprint $table) {
            $table->id('req_id');
            $table->integer('c_id');
            $table->string('c_email');
            $table->string('c_name');
            $table->string('req_service');
            $table->dateTime('req_time');
            $table->text('req_address');
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
        Schema::dropIfExists('reqservices');
    }
};
