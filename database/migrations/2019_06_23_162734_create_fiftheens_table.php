<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiftheensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiftheens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Username');
            $table->string('Password');
            $table->string('Email');
            $table->integer('Contact');
            $table->string('College');
            $table->string('Degree');
            $table->string('Address');
            $table->string('School');
            $table->string('Hobby');
            $table->string('City');
            $table->string('Company');
            $table->string('Fathername');
            $table->string('Mothername');
            $table->integer('Pincode');
            $table->string('State');
            $table->timestamps('created_dt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiftheens');
    }
}
