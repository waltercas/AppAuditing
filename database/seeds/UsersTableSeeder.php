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
        

        App\User::create([
            'name'      =>'Walter Castillo',
            'email'     =>'waltercastillo@live.com.ar',
            'password'  =>bcrypt('123'),
        ]);

        factory(App\User::class, 29)->create();
    }
}
