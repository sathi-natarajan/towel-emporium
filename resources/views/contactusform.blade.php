@extends('layouts.app')
 
@section('content')
 
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
					<h3>CONTACT US</h3>
				</div>

                <div class="card-body">
					<!--if you don't put this create blade file, then use "games" only below and not "/games"-->
    <form method="post" action="/contactus" enctype="multipart/form-data">
        {{ csrf_field() }}
       
		
		<div class="form-group row">
				<label for="fullname" class="col-sm-4 col-form-label text-md-right">{{ __('Your fullname:') }}</label>

				<div class="col-md-6">
					<input id="fullname" type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" required autofocus>

					@if ($errors->has('fullname'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('fullname') }}</strong>
						</span>
					@endif
				</div>
		</div>
		
         <div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
		</div>
		
       <div class="form-group row">
			<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Your comments and/or suggestions') }}</label><br/>
			<div class="col-md-6">
				<textarea id="commentssuggestions" class="form-control{{ $errors->has('commentssuggestions') ? ' is-invalid' : '' }}" name="commentssuggestions" value="{{ old('commentssuggestions') }}" required autofocus></textarea>

				@if ($errors->has('commentssuggestions'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('commentssuggestions') }}</strong>
					</span>
				@endif
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col-sm-9">
            <input type="checkbox" name="newsletter" value="newsletter" class="col-sm-3 col-form-label">Please check this box to subscribe to our newsletter<br>
            </div>
        </div>
		
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
