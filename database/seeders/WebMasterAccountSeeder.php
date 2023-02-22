<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class WebMasterAccountSeeder extends Seeder
{
    public function run()
    {
        $user = new User([
        	'name' => "WebMaster",
        	'email' => "web@master.mx",
        	'password' => bcrypt('linktec12345'),
        ]);
        $user->assignRole('webmaster');

        $user->save();
    }
}
