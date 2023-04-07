<?php

namespace Database\Seeders;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
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
        $path = 'public/images/profile.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $root = Sentinel::registerAndActivate([
            'name'     => 'Root',
            'email'    => 'root@admin.com',
            'password' => 'Password123',
            'image'    => $base64
        ]);

        $root = Sentinel::registerAndActivate([
            'name'     => 'Testing Account',
            'email'    => 'testing@gmail.com',
            'password' => 'Password123',
            'image'    => $base64
        ]);
    }
}
