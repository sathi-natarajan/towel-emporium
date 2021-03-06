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
					@if(count($errors))
							<div class="form-group">
								<div class="alert alert-danger">
									<div>Please correct the following errors and retry:</div><br/>
									<ul>
										@foreach($errors->all() as $error)
											<li>{{$error}}</li>
										@endforeach
									</ul>
								</div>
							</div>
						@endif
					{!! Form::open(['route'=>'contactus']) !!}
						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							{!! Form::label('Name:') !!}
							{!! Form::text('fullname', old('fullname'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
							<span class="text-danger">{{ $errors->first('fullname') }}</span>
						</div>
 
						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							{!! Form::label('Email:') !!}
							{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
							<span class="text-danger">{{ $errors->first('email') }}</span>
						</div>
 
						<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
							{!! Form::label('Comments/Suggestions:') !!}
							{!! Form::textarea('commentssuggestions', old('commentssuggestions'), ['class'=>'form-control', 'placeholder'=>'Enter your comments and/or suggestions here']) !!}
							<span class="text-danger">{{ $errors->first('commentssuggestions') }}</span>
						</div>

						<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
							{!! Form::label('Need newsletter?') !!}
							{!! Form::checkbox('newsletter',1) !!}
						</div>
 
						<div class="form-group">
							<button class="btn btn-success">Contact US!</button>
						</div>
						
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
