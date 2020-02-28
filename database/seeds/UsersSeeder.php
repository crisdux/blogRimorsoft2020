<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,29)->create();
        
        App\User::create([
            'name'=>"Cristian Villca",
            'email'=>"crisfer.4217@gmail.com",
            'password'=>bcrypt('123')
        ]);
    }
}
