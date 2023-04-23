<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $root = User::create([
            'name' => 'root',
            'email' => 'root@stl.test',
            'password' => bcrypt(12345678)
        ]);
        $root->assignRole('root');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@stl.test',
            'password' => bcrypt(12345678)
        ]);
        $admin->assignRole('admin');

    }
}
