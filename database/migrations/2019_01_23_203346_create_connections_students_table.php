<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id_login')->unsigned();
            $table->integer('student_id_connected')->unsigned();

            $table->foreign('student_id_login')->references('user_id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id_connected')->references('user_id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date');
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
        Schema::dropIfExists('connections_students');
    }
}
