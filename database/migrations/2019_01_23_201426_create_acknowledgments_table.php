<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcknowledgmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acknowledgments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('transmitter');
            $table->date('date');
            $table->string('description');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('user_id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('acknowledgments');
    }
}
