<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $json_data = Comment::latest('created_at')->get();

        return response()->json([
            'message' => 'コメント一覧を取得しました',
            'data'    => $json_data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|min:10|max:100',
            'rating' => 'nullable|integer|min:1|max:5',
        ], [
            'content.required' => '何か入力してください。',
            'content.min' => '最小文字数: 10',
            'content.max' => '最大文字数: 100',

            'rating.integer' => '数字(1-5)で入力してください。',
            'rating.min' => '最小の数: 1',
            'rating.max' => '最大の数: 5',
        ]);

        $json_data = Comment::create([
            'article_id' => 1,
            'user_id' => 1,
            'content' => $validated['content'],
            'rating' => $validated['rating'] ?? null,
        ]);

        return response()->json([
            'message' => 'コメントが投稿されました',
            'data'    => $json_data
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
