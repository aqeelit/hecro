<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');

            $table->timestamps();
        });

        DB::table('roles')->insert(array('name' => 'Admin'));
        DB::table('roles')->insert(array('name' => 'Editor'));
        DB::table('roles')->insert(array('name' => 'Firm'));
        DB::table('roles')->insert(array('name' => 'jobseeker'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
