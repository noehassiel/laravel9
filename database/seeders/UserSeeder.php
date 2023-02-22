<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => "Sergio",
            'lastnames' => "Monterrosas Salazar",
            'position' => "Jefe de Mantenimiento",
            'phone' => "+52 844 277 1565",
            'email' => "jose.monterrosas@magna.com",
            'password' => bcrypt('sergio12345'),
        ]);
        $user->assignRole('webmaster');

        $user = User::create([
            'name' => "Supervisor",
            'email' => "admin@test.com",
            'password' => bcrypt('test12345'),
        ]);
        $user->assignRole('supervisor');

        $user = User::create([
            'name' => "Empleado",
            'email' => "analista@test.com",
            'password' => bcrypt('test12345'),
        ]);
        $user->assignRole('employee');
    }
}
