@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
					<span style="font-weight:bold;">Current catagory:</span> {{$catname}}<br/>
					<span style="font-weight:bold;">Number of towels:</span> {{$numtowels}}
				</div>

                <div class="card-body" style="width:100%">
					@if($numtowels==0)
						<p>There are no towels yet in this catagory</p>
					@else
						<p>These are some of the towels in this catagory:<br/>
							@foreach($towels as $towel)
							<h3>{{$towel->towelname}}</h3>
							<p class="clearfix mb-3">
							<a href="{{ asset('images/barber-towels/basicblack.jpg') }}" data-toggle="lightbox" 
								data-title="{{$towel->towelname}}" 
								data-footer="Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.">
<img src="{{ asset('images/barber-towels/basicblack.jpg') }}" alt="image of {{$towel->towelname}}" style="float:left;margin:0 20px 20px 0;" class="img-thumbnail  
       rounded-circle" width="100" height="100"/>
	   </a>
{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}{{$towel->toweldescription}}
</p>
	<hr/>
						@endforeach
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
