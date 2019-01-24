<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('skill_id')->unsigned();

            $table->foreign('user_id')->references('user_id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('skill_id')->references('id')
                ->on('skills')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('score')->default(100);
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
        Schema::dropIfExists('students_skills');
    }
}
