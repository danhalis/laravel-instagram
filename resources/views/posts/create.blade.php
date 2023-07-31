@extends('layouts.app')

@section('content')
    <div class="container">
		<form method="post" action="/post" enctype="multipart/form-data">
			@csrf

			<div class="row">
				<div class="col-8">
					<h3>New Post</h3>
					<div class="row mb-3">
						<label for="image" class="col-md-4 col-form-label">{{ __('Photo') }}</label>
						<input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
							name="image">
						@error('image')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
	
					<div class="row mb-3">
						<label for="caption" class="col-md-4 col-form-label">{{ __('Write a caption...') }}</label>
						<input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
							name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
						@error('caption')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
	
					<div class="row mb-3">
						<button class="btn btn-primary" type="submit">Post</button>
					</div>
				</div>
			</div>
		</form>
    </div>
@endsection
