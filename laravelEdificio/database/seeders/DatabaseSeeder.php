<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/*Muy importante importar antes la clase DB*/
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('edificios')->delete();
    	$this->call(EdificioSeeder::class);
    }
}
