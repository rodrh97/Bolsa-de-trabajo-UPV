<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc')->unique();
            $table->string('name',60);
            $table->string('phone',15);
            $table->string('email',70)->unique();
            $table->string('image_url',255)->default('storage/no_image.png');
            $table->string('country',50);
            $table->string('state',50);
            $table->string('city',50);
            $table->string('zip',10);
            $table->string('colony',50);
            $table->string('street',50);
            $table->string('schedule',500);
            $table->string('description',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
