<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
         //   $table->bigIncrements('id');
            $table->char('Nid',15)->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->integer('salary');
            $table->date('birth_date');
            $table->integer('children_number');
            $table->binary('marital_status');
            $table->binary('monthly_treatment');
            $table->binary('rent');
            $table->binary('private_account');
            $table->string('notes');
            $table->rememberToken();
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
        Schema::dropIfExists('cases');
    }
}