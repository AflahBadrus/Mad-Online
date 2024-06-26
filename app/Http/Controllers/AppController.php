<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }
    public function news()
    {
        return view('news.news', [
            'artikels' => Blog::orderBy('id', 'desc')->get(),
        ]);
    }
    public function detail($slug)
    {


        $artikel = Blog::where('slug', $slug)->first();
        return view('news.detail', [
            'artikel' => $artikel
        ]);
    }
}
