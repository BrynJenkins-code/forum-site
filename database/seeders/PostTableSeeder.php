<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $a = new Post;
        $a->user_id = "1";
        $a->category_id = "1";
        $a->post_title="example";
        $a->post_content = "example paragraph";
        $a->views = "1000";
        $a->save();

        Post::factory()->count(100)->create();
    }
}
