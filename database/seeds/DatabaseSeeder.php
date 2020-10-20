<?php

use Illuminate\Database\Seeder;
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
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
			'name' => 'Administrador',
			'email' => 'admin@admin.com',
			'password' => bcrypt('password.es.admin'),
		]);
		DB::table('users')->insert([
			'name' => 'Juan Carlos Molina',
			'email' => 'juanc@hotmail.com',
			'password' => bcrypt('password.es.user'),
		]);
    }
}
