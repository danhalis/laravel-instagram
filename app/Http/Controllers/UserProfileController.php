<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index($userId)
    {
        $user = User::find($userId);
        return view('home', [
            'user' => $user,
        ]);
    }
}
