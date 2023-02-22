<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create([
            'name' => 'webmaster',
        ]);

        $role->givePermissionTo('all_access');
        $role->givePermissionTo('admin_access');
        $role->givePermissionTo('analyst_access');

        $role = Role::create([
            'name' => 'supervisor',
        ]);

        $role->givePermissionTo('admin_access');
        $role->givePermissionTo('analyst_access');

        $role = Role::create([
            'name' => 'employee',
        ]);

        $role->givePermissionTo('analyst_access');
    }
}
