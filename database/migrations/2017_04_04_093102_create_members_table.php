<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{

    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_name');
            $table->string('driver_name');
            $table->string('gender');
            $table->string('motor_reg');
            $table->string('logbook');
            $table->date('dor');
            $table->string('phone');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('members');
    }
}
