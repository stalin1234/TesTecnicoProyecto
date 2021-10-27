<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
        	[
	        	'nombres' => 'Daniel',
	        	'apellidos' => 'Perez luis',
	        	'edad' => 28,
	        	'sexo' => 'Masculino',
	        	'telefono' => 934412473,
	        	'correo' => 'afsc@gmail.com',
	        	'direccion' => 'av.villa 310',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'nombres' => 'Jose Maria',
	        	'apellidos' => 'Salas',
	        	'edad' => 34,
	        	'sexo' => 'Masculino',
	        	'telefono' => 977777737,
	        	'correo' => 'klo@gmail.com',
	        	'direccion' => 'Av.Quilin 550',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'nombres' => 'Pedro',
	        	'apellidos' => 'Perez',
	        	'edad' => 52,
	        	'sexo' => 'Masculino',
	        	'telefono' => 977100000,
	        	'correo' => 'ma@gmail.com',
	        	'direccion' => 'av. Matta 502',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'nombres' => 'Marco',
				'apellidos' => 'Lopez',
				'edad' => 18,
				'sexo' => 'Masculino',
				'telefono' => 990900991,
				'correo' => 'matta@gmail.com',
				'direccion' => 'pj 000',
				'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
