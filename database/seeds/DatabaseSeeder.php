<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
    		'rol',
    		'permiso'
    	]);
        // $this->call(UsersTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(PermisoTableSeeder::class);

    }

    protected function truncateTables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	foreach ($tables as $table) {
    		# code...
    		DB::table($table)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
