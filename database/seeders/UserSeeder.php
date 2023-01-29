<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$admin = User::create([
			'name' => 'Super Admin',
			'email' => 'superadmin@ciamis.id',
			'password' => bcrypt('12345678'),
		]);

		$admin->assignRole('superadmin');

		$user = User::create([
			'name' => 'Admin',
			'email' => 'admin@ciamis.id',
			'password' => bcrypt('12345678'),
		]);

		$user->assignRole('admin');
	}
}
