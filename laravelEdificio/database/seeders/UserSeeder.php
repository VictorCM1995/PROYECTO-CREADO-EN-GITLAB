<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
	private $usuarios = array(
		array('name' => 'Alfa','email'=>'ejemplo@a.com','password' => 'uno'),
		array('name' => 'Betaa','email'=>'ejemplo@b.com','password' => 'dos'),
	);
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       foreach ($this->usuarios as $usuario)
    	{
    		$a = new User();
    		$a->name = $usuario['name'];
    		$a->email = $usuario['email'];
    		$a->password = bcrypt($usuario['password']);
    		$a->save();
    	}
    	$this->command->info('Tabla users inicializada con datos');
    }
}
