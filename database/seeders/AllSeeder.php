<?php

namespace Database\Seeders;

use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(2);

        DB::table('dashboard')->insert([
            'title' => 'Halo, saya '.$user->name.'.
            Saya seorang mahasiswa mobile designer dengan ambisi dan skill pemecahan masalah yang handal.',
        ]);

        DB::table('profile')->insert([
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mattis interdum elit, nec ullamcorper enim elementum a. Vestibulum iaculis justo ut arcu luctus, tristique hendrerit sem efficitur. Proin pharetra, est at gravida tincidunt, justo nulla ultrices mauris, sed efficitur odio lectus at turpis. Nam vitae maximus risus. 
            
            Curabitur viverra egestas vestibulum. Aliquam a est augue. Aliquam vel lectus nibh. Aliquam erat volutpat. Donec et posuere arcu. Cras eget hendrerit elit. Mauris feugiat nec purus in facilisis. Nullam quis placerat eros, in feugiat ante. Nullam tempor in quam nec malesuada. Phasellus non mi id felis convallis maximus. Nullam sit amet nunc dui. Donec feugiat eget magna ut dictum.

            Curabitur a viverra quam. Morbi finibus mattis nulla, sit amet pharetra nulla imperdiet vel. Cras viverra quis nisi ut tincidunt. Mauris eu ultricies magna. Curabitur et sollicitudin dolor. Sed sed nunc ut risus porta pharetra et nec ipsum. Quisque nec bibendum felis. Nam at volutpat purus, et ultricies ipsum. In consequat turpis et ligula convallis dignissim.",
        ]);

        DB::table('project')->insert([
            'title'       => 'UI/UX Mobile',
            'description' => 'Saya membuat tampilan mobile dengan Android Studio dan Visual Studio Code',
            'image'       => 'images/no-image.jpg',
            'date'        => '2020-04-06'
        ]);

        DB::table('project')->insert([
            'title'       => 'UI/UX Website',
            'description' => 'Saya membuat tampilan mobile dengan menggunakan Visual Studio Code',
            'image'       => 'images/no-image.jpg',
            'date'        => '2020-04-06'
        ]);

        DB::table('project')->insert([
            'title'       => 'Project Kampus',
            'description' => 'Saya membuat tampilan mobile dengan Android Studio dan Visual Studio Code untuk membuat website',
            'image'       => 'images/no-image.jpg',
            'date'        => '2020-04-06'
        ]);

        DB::table('socmed')->insert([
            'category' => 'twitter',
            'link'     => 'https://www.twitter.com',
        ]);

        DB::table('socmed')->insert([
            'category' => 'instagram',
            'link'     => 'https://www.instagram.com',
        ]);

        DB::table('socmed')->insert([
            'category' => 'linkedin',
            'link'     => 'https://www.linkedin.com',
        ]);




    }
}
