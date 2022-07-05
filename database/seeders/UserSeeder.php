<?php

namespace Database\Seeders;

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
        \App\Models\User::insert([
            'name' => 'Admin',
            'email' => 'admin@aptech.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
            'role_id' => 1,
            'status'=> 1
        ]);
    }
}
