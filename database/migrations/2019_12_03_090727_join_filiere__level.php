<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinFiliereLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('filiere_id');
            $table->unsignedInteger('level_id');
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
        Schema::dropIfExists('filiere_level'); 
    }
}

