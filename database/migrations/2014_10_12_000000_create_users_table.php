<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('week_1');
            $table->string('week_2');
            $table->string('week_3');
            $table->string('week_4');
            $table->string('week_5');
            $table->string('week_6');
            $table->string('week_7');
            $table->string('week_8');
            $table->string('week_9');
            $table->string('week_10');
            $table->string('week_11');
            $table->string('week_12');
            $table->string('status');
            $table->string('remark');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('national_id')->unique();
            $table->string('role');
            $table->string('department');
            $table->string('password');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('certificate_of_conduct');
            $table->string('KCSE_certificate');
            $table->string('national_id')->unique();
            $table->string('insurance');
            $table->string('transcript');
            $table->string('application_letter');
            $table->string('introduction_letter');
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
        Schema::dropIfExists('users');
    }
}
