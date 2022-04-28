<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            $post = new Post();
            $post->title = "テストタイトル - " . $i;
            $post->description =
                "テスト内容\nテスト内容\nテスト内容\nテスト内容 - " . $i;
            $post->save();
        }
    }
}