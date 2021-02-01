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
    	DB::table('animales')->delete();
    	$this->call(AnimalSeeder::class);
        
        DB::table('users')->delete();
        $this->call(UserSeeder::class);
        \App\Models\User::factory(5)->create();

        DB::table('revisiones')->delete();
        $this->call(RevisionSeeder::class);
    }
}
