<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('users')->insert([
            'name'      =>  'Benito Perez',
            'email'     =>  'benito@hotmail.com',
            'password'  =>  bcrypt('secret'),
            'type'      =>  'admin'
        ]);
        */
        factory(App\User::class, 15)->create();
    }
}
