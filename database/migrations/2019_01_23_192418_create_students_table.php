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
            $table->integer('user_id')->unsigned()->primary();
            $table->boolean('academic_situation')->default(false);
            $table->integer('career_id')->unsigned();
            $table->integer('tutor_user_id')->unsigned();
            $table->string('phone');
            
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('career_id')->references('id')->on('careers')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tutor_user_id')->references('id')
                ->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('deleted')->default(0);
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
