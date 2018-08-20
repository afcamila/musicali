<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Curso;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_aluno = Role::where('name', 'aluno')->first();
	    $role_professor  = Role::where('name', 'professor')->first();
	    $role_operador  = Role::where('name', 'operador')->first();
	    $role_administrador  = Role::where('name', 'administrador')->first();

	    $violao  = Curso::where('id', 1)->first();

	    $aluno = new User();
	    $aluno->name = 'Carine Ferreira';
	    $aluno->email = 'carine@gmail.com';
	    $aluno->password = '123456';
	    $aluno->save();
	    $aluno->roles()->attach($role_aluno);

	    $aluno = new User();
	    $aluno->name = 'Cris Ferreira';
	    $aluno->email = 'cris@gmail.com';
	    $aluno->password = '123456';
	    $aluno->save();
	    $aluno->roles()->attach($role_aluno);

	    $aluno = new User();
	    $aluno->name = 'Flávia Ferreira';
	    $aluno->email = 'flavia@gmail.com';
	    $aluno->password = '123456';
	    $aluno->save();
	    $aluno->roles()->attach($role_aluno);

	    $aluno = new User();
	    $aluno->name = 'Maria Luísa';
	    $aluno->email = 'marialuisa@gmail.com';
	    $aluno->password = '123456';
	    $aluno->save();
	    $aluno->roles()->attach($role_aluno);

	    $aluno = new User();
	    $aluno->name = 'Aline Marina';
	    $aluno->email = 'aline@gmail.com';
	    $aluno->password = '123456';
	    $aluno->save();
	    $aluno->roles()->attach($role_aluno);

	    $professor = new User();
	    $professor->name = 'Daniel Bahia';
	    $professor->email = 'daniel@gmail.com';
	    $professor->password = '123456';
	    $professor->save();
	    $professor->roles()->attach($role_professor);

	    $professor = new User();
	    $professor->name = 'Pedro Pinho';
	    $professor->email = 'pedro@gmail.com';
	    $professor->password = '123456';
	    $professor->save();
	    $professor->roles()->attach($role_professor);

	    $operador = new User();
	    $operador->name = 'Camila Ferreira';
	    $operador->email = 'camila@gmail.com';
	    $operador->password = '123456';
	    $operador->save();
	    $operador->roles()->attach($role_operador);

	    $operador = new User();
	    $operador->name = 'Maria Taís';
	    $operador->email = 'maria@gmail.com';
	    $operador->password = '123456';
	    $operador->save();
	    $operador->roles()->attach($role_operador);

	    $administrador = new User();
	    $administrador->name = 'Fernando Oliveira';
	    $administrador->email = 'fernando@gmail.com';
	    $administrador->password = '123456';
	    $administrador->save();
	    $administrador->roles()->attach($role_administrador);
    }
}
