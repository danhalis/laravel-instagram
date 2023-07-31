@extends('layouts.app')

@section('content')
    <div class="container">
		<form method="post" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
			@csrf
      @method('PATCH')

			<div class="row">
				<div class="col-8">
					<h3>Edit Profile</h3>

					<div class="row mb-3">
						<label for="bio" class="col-md-4 col-form-label">{{ __('Bio') }}</label>
						<input id="bio" type="text" class="form-control @error('bio') is-invalid @enderror"
							name="bio" value="{{ old('bio') ?? $user->profile->bio }}" autocomplete="bio" autofocus>
						@error('bio')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

          <div class="row mb-3">
						<label for="facebook_url" class="col-md-4 col-form-label">{{ __('Facebook URL') }}</label>
						<input id="facebook_url" type="text" class="form-control @error('facebook_url') is-invalid @enderror"
							name="facebook_url" value="{{ old('facebook_url') ?? $user->profile->facebook_url }}" autocomplete="facebook_url" autofocus>
						@error('facebook_url')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="row mb-3">
						<button class="btn btn-primary">Save</button>
					</div>
				</div>
			</div>
		</form>
    </div>
@endsection
