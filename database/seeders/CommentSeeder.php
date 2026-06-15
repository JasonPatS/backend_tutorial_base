<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            'この記事はとても参考になりました！ありがとうございます。',
            '少し難しい内容でしたが、勉強になりました。',
            'もっと詳しい解説が欲しいです。次回に期待します。',
            '素晴らしいアプローチですね。自分のプロジェクトでも試してみます。',
            'ここは少し間違っている気がします。確認をお願いします。',
            '分かりやすい説明で助かりました！最高です。',
        ];

        foreach ($contents as $content) {
            $randomTime = now()->subMinutes(rand(5, 1440));

            Comment::create([
                'article_id' => 1,
                'user_id'    => 1,
                'content'    => $content,
                'rating'     => rand(1, 5),
                'created_at' => $randomTime,
                'updated_at' => $randomTime,
            ]);
        }
    }
}
