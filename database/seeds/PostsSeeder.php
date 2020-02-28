<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //relacion de post con etiquetas a nivel de factorys y seeders 
        factory(App\Post::class,300)->create()->each(function(App\Post $post){
            $post->tags()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,20)
            ]);
        });
    }
}
