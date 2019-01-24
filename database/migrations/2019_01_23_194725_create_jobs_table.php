<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description',1000);
            $table->string('salary')->nullable();;
            $table->string('job_type');
            $table->string('country',50);
            $table->string('state',50);
            $table->string('city',50);
            $table->string('zip',10);
            $table->string('colony',50);
            $table->string('street',50);
            $table->integer('id_sector')->unsigned();
            $table->integer('id_company')->unsigned();

            $table->foreign('id_sector')->references('id')
                ->on('sectors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_company')->references('id')
                ->on('companies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('jobs');
    }
}
