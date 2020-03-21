<?php

use Illuminate\Database\Seeder;
use App\Model\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 500)->create();
    }
}
