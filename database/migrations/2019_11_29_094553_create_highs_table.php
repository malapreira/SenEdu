<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHighsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('first_name',150);
            $table->string('civility',50);
            $table->date('year_birth',100);
            $table->string('Birth_Place',100);
            $table->string('address',150);
            $table->integer('phone');
            $table->string('email',150);
            $table->unsignedInteger('relative_id');
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
        Schema::dropIfExists('highs');
    }

}
