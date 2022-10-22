<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstaids', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default(' ');
            $table->string('desc')->default(' ');
            $table->string('symptoms')->default(' ');
            $table->string('firstAid')->default(' ');
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
        Schema::dropIfExists('firstaids');
    }
}
