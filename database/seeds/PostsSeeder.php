<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postsArray = [
            [
                'title' => "Pre-Work Week 1, AwesomeInc Bootcamp"
            ],
            [
                'title' => "Pre-Work Week 2, AwesomeInc Bootcamp"
            ],
            [
                'title' => "Pre-Work Week 3, AwesomeInc Bootcamp"
            ],
            [
                'title' => "Pre-Work Week 4, AwesomeInc Bootcamp"
            ],
            [
                'title' => "Classroom Week 1, AwesomeInc Bootcamp"
            ]
        ];
        foreach($postsArray as $Post) {
            Post::create($Post);
        }
    }
}
