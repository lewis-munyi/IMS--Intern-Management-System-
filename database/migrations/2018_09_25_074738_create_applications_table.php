<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
           $table->increments('id');
        //    $table->integer('user_id');
           $table->string('name');
           $table->string('email')->unique();
           $table->integer('id_number')->unique();
           //accepted, pending or rejected
           $table->string('status')->default('pending');
           $table->string('certificate_of_conduct')->nullable();
           $table->string('supervisor_email')->nullable();
           $table->string('KCSE_certificate')->nullable();
           $table->string('national_id')->unique()->nullable();
           $table->string('insurance')->nullable();
           $table->string('transcript')->nullable();
           $table->string('application_letter')->nullable();
           $table->string('introduction_letter')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
