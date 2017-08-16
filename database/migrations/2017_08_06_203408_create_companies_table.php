<?php

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
            $table->integer('user_id')->uniqid();
            $table->string('title')->nullable();
            $table->string('category')->default('other');
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('show_website')->nullable();
            $table->tinyInteger('show_email')->nullable();
            $table->tinyInteger('show_phone')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->default('nologo.jpg');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('companies');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
