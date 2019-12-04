<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinControlHigh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls_highs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('control_id');
            $table->unsignedInteger('high_id');
            $table->string('notes');
           
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
        Schema::dropIfExists('controls_highs'); 
    }
}
