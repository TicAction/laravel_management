<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('student_firstname', 100);
            $table->string('student_lastname', 100);
            $table->date('student_birthday');
            $table->timestamps();
        });
        Schema::create('student_user', function(Blueprint $table){

           $table->integer('student_id')->unsigned()->index();
           $table->integer('user_id')->unsigned()->index();
           $table->primary(['student_id','user_id']);
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
