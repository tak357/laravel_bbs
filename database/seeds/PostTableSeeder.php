<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 50)
            ->create()
            ->each(function ($post){
                $comments = factory(App\Models\Comment::class, 2)->make();
                $post->comments()->saveMany($comments);
            });
    }
}
