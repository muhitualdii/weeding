<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        return view('forum.index');
    }

    public function postArticle(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $imagePath = $request->file('image')->store('articles');

        Article::create([
            'title' => $request->title,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Artikel berhasil diposting.');
    }
}
