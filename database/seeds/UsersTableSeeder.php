<?php

use BetterLife\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BetterLife\User::class, 10)->create();

        User::create([
            'name' => 'administrador',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@betterlife.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12341234'),
        ]);

        User::create([
            'name' => 'Usuario',
            'username' => 'user',
            'role' => 'user',
            'email' => 'user@betterlife.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12341234'),
        ]);
    }
}
