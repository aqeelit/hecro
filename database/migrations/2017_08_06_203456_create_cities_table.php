<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('cities')->insert(array('name' => 'Baghdad'));
        DB::table('cities')->insert(array('name' => 'Basra'));
        DB::table('cities')->insert(array('name' => 'Najaf'));
        DB::table('cities')->insert(array('name' => 'Karbala'));
        DB::table('cities')->insert(array('name' => 'Erbil'));
        DB::table('cities')->insert(array('name' => 'Al Anbar'));
        DB::table('cities')->insert(array('name' => 'Babil'));
        DB::table('cities')->insert(array('name' => 'Kirkuk'));
        DB::table('cities')->insert(array('name' => 'Maysan'));
        DB::table('cities')->insert(array('name' => 'Diyala'));
        DB::table('cities')->insert(array('name' => 'Salah ad Din'));
        DB::table('cities')->insert(array('name' => 'Sulaymaniyah'));
        DB::table('cities')->insert(array('name' => 'Wasit'));
        DB::table('cities')->insert(array('name' => 'Ninawa'));
        DB::table('cities')->insert(array('name' => 'Dhi Qar'));
        DB::table('cities')->insert(array('name' => 'Al Muthana'));
        DB::table('cities')->insert(array('name' => 'Al-Qādisiyyah'));
        DB::table('cities')->insert(array('name' => 'Dahuk'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
