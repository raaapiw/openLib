<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createUser();
    }

    public function createRoles()
    {
        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'SuperAdmin',
                'slug'        => 'superAdmin',
            ]
        );
        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Admin',
                'slug'        => 'admin',
            ]
        );

        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Mahasiswa',
                'slug'        => 'mahasiswa',
            ]
        );
    }

    public function createUser()
    {
        $this->createDefaultSuperAdmin();
        $this->createDefaultAdmin();
        $this->createDefaultMahasiswa();

        foreach(range(0,10) as $index){
            $faker = Faker::create();
            $credentials = [
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => 'qwerty123',
                'name' => $faker->name,
                'gender' => 'M',
            ];

            $user = Sentinel::registerAndActivate($credentials);
            $role = Sentinel::findRoleBySlug('mahasiswa');
            $user->roles()->attach($role);
        }
    }

    public function createDefaultSuperAdmin(){
        $credentials = [
            'username' => 'superAdmin',
			'email' => 'superAdmin@example.com',
            'password' => 'qwerty123',
            'name' => 'SuperAdmin',
            'gender' => 'M',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('superAdmin');
        $user->roles()->attach($role);
    }

    public function createDefaultAdmin(){
        $credentials = [
            'username' => 'admin',
			'email' => 'verifikasismelter.ptsi@gmail.com',
            'password' => 'qwerty123',
            'name' => 'Admin',
            'gender' => 'M',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('admin');
        $user->roles()->attach($role);
    }
    public function createDefaultMahasiswa(){
        $credentials = [
            'username' => 'mahasiswa',
			'email' => 'gulu@gul.c',
            'password' => 'qwerty123',
            'name' => 'Mahasiswa',
            'gender' => 'M',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('mahasiswa');
        $user->roles()->attach($role);
    }
}
