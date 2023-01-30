<?php

namespace Database\Seeders;

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
			'username' => "superadmin",
			'email' => 'superadmin@ciamis.id',
			'password' => bcrypt('12345678'),
			'is_admin' => '1'
		]);

		$admin->assignRole('superadmin');

		$user = User::create([
			'name' => 'Admin',
			'username' => "admin",
			'email' => 'admin@ciamis.id',
			'password' => bcrypt('12345678'),
		]);

		$user->assignRole('admin');
	}
}
