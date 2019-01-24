<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //$table->integer('id')->unsigned()->primary();
            $table->integer('id')->unsigned()->primary();
            $table->string('university_id')->unique();
            $table->string('title',10)->nullable();
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('second_last_name',60)->nullable();
            $table->string('username',128)->unique();
            $table->string('password',128);
            $table->string('email',70)->unique();
            $table->string('image_url',255)->default('storage/no_image.png');
            $table->integer('type')->unsigned()->default(1);

            $table->timestamp('email_verified_at')->nullable();
            $table->foreign('type')->references('id')
                ->on('user_types')->onDelete('cascade')->onUpdate('cascade');
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
}
