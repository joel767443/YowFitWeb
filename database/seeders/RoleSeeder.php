<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


/**
 * Class RoleSeeder
 */
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Normal']);
    }
}
