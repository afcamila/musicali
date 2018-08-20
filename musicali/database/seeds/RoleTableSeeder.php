<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_aluno = new Role();
	    $role_aluno->name = 'aluno';
	    $role_aluno->description = 'Usuário do tipo Aluno';
	    $role_aluno->save();

	    $role_professor = new Role();
	    $role_professor->name = 'professor';
	    $role_professor->description = 'Usuário do tipo Professor';
	    $role_professor->save();

	    $role_operador = new Role();
	    $role_operador->name = 'operador';
	    $role_operador->description = 'Usuário do tipo Operador';
	    $role_operador->save();

	    $role_administrador = new Role();
	    $role_administrador->name = 'administrador';
	    $role_administrador->description = 'Usuário do tipo Administrador';
	    $role_administrador->save();
    }
}
