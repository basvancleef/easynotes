<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles
        $roles = [
            ['name' => 'Guest'],
            ['name' => 'Author'],
            ['name' => 'Administrator'],
        ];

        // Insert roles into the 'roles' table
        DB::table('roles')->insert($roles);
    }
}
