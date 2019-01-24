<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id_login')->unsigned();
            $table->integer('company_id')->unsigned();

            $table->foreign('student_id_login')->references('user_id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('company_id')->references('id')
                ->on('companies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('connections_companies');
    }
}
