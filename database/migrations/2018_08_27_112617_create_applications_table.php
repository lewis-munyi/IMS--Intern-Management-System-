<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('applications', function (Blueprint $table) {
//            // Rows
//            $table->increments('id');
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->string('certificate_of_conduct');
//            $table->string('KCSE_certificate');
//            $table->string('national_id')->unique();
//            $table->string('insurance');
//            $table->string('transcript');
//            $table->string('application_letter');
//            $table->string('introduction_letter');
//            $table->rememberToken();
//            $table->timestamps();
//        });
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
