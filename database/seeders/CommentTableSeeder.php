<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Comment;
        $a->post_id = "75";
        $a->comment = "This is really helpful :)";
        $a->save();

        $comments = Comment::factory()->count(100);

    }
}

