<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = App\User::create([
            'name' => 'badis',
            'email' => 'badisdev@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/img_avatar.png',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam vel inventore nesciunt omnis odio aut sint deleniti fugit cumque ipsum quaerat, sed cupiditate illo unde vero. Alias modi quia mollitia.',
            
            ]);

    
    }
}
