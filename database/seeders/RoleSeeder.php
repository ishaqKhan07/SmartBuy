<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::insert([
            'role' => 'Admin',
        ]);
        \App\Models\Role::insert([
            'role' => 'Seller',
        ]);
        \App\Models\Role::insert([
            'role' => 'Customer',
        ]);
    }
}
