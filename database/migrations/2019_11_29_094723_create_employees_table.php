<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('first_name',150);
            $table->date('year_birth',100);
            $table->string('Birth_Place',100);
            $table->string('Marital_status',100);
            $table->string('status',100);
            $table->string('address',150);
            $table->integer('phone');
            $table->string('email',150);
            $table->string('civility',50);
            $table->Integer('service_id')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
