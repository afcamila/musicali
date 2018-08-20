<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role comes before User seeder here.
        // User seeder will use the roles above created.
        $this->call(RoleTableSeeder::class);
        // User seeder will use the users above created.
		$this->call(UserTableSeeder::class);
        // User seeder will use the courses above created.
        $this->call(CursoTableSeeder::class);
        // User seeder will use the chapters above created.
        $this->call(ModuloTableSeeder::class);
        // User seeder will use the classes above created.
        $this->call(AulaTableSeeder::class);
        // User seeder will use the classes above created.
        $this->call(TestTableSeeder::class);
        // User seeder will use the classes above created.
        $this->call(QuestionTableSeeder::class);
        // User seeder will use the classes above created.
        $this->call(GabaritoTableSeeder::class);
        // User seeder will use the classes above created.
        $this->call(PremiosTableSeeder::class);
    }
}
