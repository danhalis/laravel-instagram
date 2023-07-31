@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col-3 px-5">
            <img class="w-100 rounded-circle" src="https://avatars.githubusercontent.com/u/60619445?v=4" alt="Profile Picture" />
        </div>
        <div class="col-9">
            <h3 class="mb-3">{{ $user->username }}</h3>
            <div class="d-flex gap-5 mb-2">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div><strong>0</strong> followers</div>
                <div><strong>0</strong> following</div>
            </div>
            <div>
                <p class="fw-bold">{{ $user->name }}</p>
                <p>{{ $user->profile->bio }}</p>
                <a href={{ $user->profile->facebook_url }} target="_blank">Facebook profile</a>
            </div>
            <div>
                <a href="/post/create">+ New Post</a>
            </div>
        </div>
    </div>
    <div class="row pt-5 gx-4 gy-4">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/post/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="" />
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
