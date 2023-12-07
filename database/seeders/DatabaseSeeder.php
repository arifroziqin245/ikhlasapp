<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Staff',
            'username' => 'Staff',
            'password' => bcrypt('Staff'),
            'role' => '1',
        ]);
        User::create([
            'name' => 'Sales',
            'username' => 'Sales',
            'password' => bcrypt('Sales'),
            'role' => '2',
        ]);
        User::create([
            'name' => 'Boss',
            'username' => 'Boss',
            'password' => bcrypt('Boss'),
            'role' => '3',
        ]);
    }
}
