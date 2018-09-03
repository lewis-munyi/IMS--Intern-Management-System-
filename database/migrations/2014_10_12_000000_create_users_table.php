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
            $table->string('week-1');
            $table->string('week-2');
            $table->string('week-3');
            $table->string('week-4');
            $table->string('week-5');
            $table->string('week-6');
            $table->string('week-7');
            $table->string('week-8');
            $table->string('week-9');
            $table->string('week-10');
            $table->string('week-11');
            $table->string('week-12');
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
