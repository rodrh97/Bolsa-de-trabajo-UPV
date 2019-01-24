<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_competences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('competence_id')->unsigned();

            $table->foreign('student_id')->references('user_id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('competence_id')->references('id')
                ->on('competences')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('students_competences');
    }
}
