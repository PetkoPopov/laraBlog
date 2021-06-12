<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class ,20 )->create()->each(function(Post $post){
            
            $post->save();
        }
            
           ) ;                 //klasa na modela , broj pyti koito ]e se izpylni za da pylnim tablicata 
    }
}
