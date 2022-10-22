<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableusers', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->default(' ');
            $table->string('NIC')->default(' ');
            $table->string('phone_no')->default(' ');
            $table->string('dateOfBirth');
            $table->string('gender')->default(' ');
            $table->string('bloodGroup')->default(' ')->nullable();
            $table->string('email')->default(' ');
            $table->string('password')->default(' ');
            $table->string('userType')->default(' ');
            $table->string('ambulanceId')->default(' ')->nullable();
            $table->string('hospitalId')->default(' ')->nullable();
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
        Schema::dropIfExists('tableusers');
    }
}
