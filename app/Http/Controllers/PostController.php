<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $request = request();

        if (!$request->hasFile('image')) {
            dd('No image');
        }

        // Validate input data
        $data = request()->validate([
            'image' => ['required', 'image'],
            'caption' => [],
        ]);

        // Store image in local storage
        $imagePath = $data['image']->store('uploads', 'public');

        // Create the post
        auth()->user()->posts()->create([
            'image' => $imagePath,
            'caption' => $data['caption'],
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
}
