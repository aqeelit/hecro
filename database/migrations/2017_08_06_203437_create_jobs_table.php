<?php

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
            $table->tinyInteger('public')->default(1);
            $table->string('position')->nullable();
            $table->string('category')->nullable();
            $table->string('salary')->nullable();
            $table->string('education')->default('No matter');
            $table->string('experience')->default('No matter');
            $table->string('employment_type')->default('No matter');
            $table->text('description')->nullable(); 
            $table->string('city');
            $table->timestamps();

            //Relation between two tables

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');

            



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
