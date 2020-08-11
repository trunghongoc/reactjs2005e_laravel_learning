<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        Post::create([
            'user_id' => $user->id,
            'title' => 'lớp học reactjs',
            'slug' => 'lop-hoc-reactjs',
            'content' => 'nội dung 1'
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => 'học php laravel',
            'slug' => 'hoc-php-laravel',
            'content' => 'nội dung 2'
        ]);
    }
}
