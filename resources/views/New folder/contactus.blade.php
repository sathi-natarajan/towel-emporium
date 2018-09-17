@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>CONTACT US</h3></div>
				<p style="align:center;padding:25px 50px 25px 50px;">Thank you for taking your time to contact us.  Please provide the below information which enables us to get back to you promptly.</p>
                <div class="card-body">
                    <form method="POST" action="contactnew" }}">
                        @csrf

						<div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Your full name:') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter" {{ old('newsletter') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Please send me your monthly newsletter (by email)') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send') }}
                                </button>

                            </div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection