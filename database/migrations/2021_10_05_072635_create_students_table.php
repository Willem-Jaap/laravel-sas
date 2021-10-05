<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('first_name', 24);
            $table->string('initials', 6);
            $table->string('insertion', 16);
            $table->string('last_name', 24);
            $table->string('postal_code', 6);
            $table->string('street', 32);
            $table->number('number', 5);
            $table->string('number_addition', 6);
            $table->string('city', 64);
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
        Schema::dropIfExists('students');
    }
}
