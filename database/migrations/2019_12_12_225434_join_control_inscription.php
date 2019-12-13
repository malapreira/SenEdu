<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinControlInscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_inscription', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('note',100);
            $table->Integer('controls_id')->nullable();
            $table->Integer('inscriptions_id')->nullable();
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
        Schema::dropIfExists('controls_inscriptions');
    }
}
