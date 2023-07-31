@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row d-flex">
        <div class="col-7">
          <img class="w-100" src="/storage/{{ $post->image }}" alt="" />
        </div>
        <div class="col-5">
          <h4 class="fw-bold">{{ $post->user->username }}</h4>
          <p>{{ $post->caption }}</p>
        </div>
      </div>
    </div>
@endsection