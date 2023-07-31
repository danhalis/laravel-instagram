<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        // Crop image to fit
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // Create the post
        auth()->user()->posts()->create([
            'image' => $imagePath,
            'caption' => $data['caption'],
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
}
