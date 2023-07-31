<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index($userId)
    {
        $user = User::findOrFail($userId);
        return view('profiles/index', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        // Check if the authenticated user is authorized to update this profile
        // using UserProfilePolicy
        $this->authorize('update', $user->profile);
        return view('profiles/edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $request = request();

        $data = $request->validate([
            'bio' => [],
            'facebook_url' => ['url'],
        ]);

        auth()->user()->profile()->update($data);

        return redirect("/profile/{$user->id}");
    }
}
