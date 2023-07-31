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
                <div><strong>0</strong> posts</div>
                <div><strong>0</strong> followers</div>
                <div><strong>0</strong> following</div>
            </div>
            <div>
                <p class="fw-bold">{{ $user->name }}</p>
                <p>{{ $user->profile->bio }}</p>
                <a href={{ $user->profile->facebook_url }} target="_blank">Facebook profile</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://raw.githubusercontent.com/danhalis/portfolio/master/public/about-photo.jpg" alt="" />
        </div>
        <div class="col-4">
            <img class="w-100" src="https://raw.githubusercontent.com/danhalis/portfolio/master/public/about-photo.jpg" alt="" />
        </div>
        <div class="col-4">
            <img class="w-100" src="https://raw.githubusercontent.com/danhalis/portfolio/master/public/about-photo.jpg" alt="" />
        </div>
    </div>
</div>
@endsection
