<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create roles
        Role::create([
            'name' => 'Admin',
            'description' => 'Administrator',  
        ]);

        Role::create([
            'name' => 'Editor',
            'description' => 'Editor',  
        ]);
        Role::create([
            'name' => 'Author',
            'description' => 'Author',
        ]);
        Role::create([
            'name' => 'User',
            'description' => 'User',
        ]);
        
    }
}
