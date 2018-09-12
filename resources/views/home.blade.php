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

                <div class="card-body">
					<p>
					@if($numtowels==0)
						<p>There are no towels yet in this catagory</p>
						@else
						<p>These are some of the towels in this catagory:<br/>
						@foreach($towels as $towel)
							<p>
								<h4>{{$towel->towelname}}</h4>
								<span style="text-align:center;">
									{{$towel->toweldescription}}
								</span><br/>
								<p>
									<img src="{{ asset('images/barber-towels/basicblack.jpg') }}" alt="image of {{$towel->towelname}}" width="100" height="200"/>
								</p>
								<hr style="background-color:blue;"/>
						@endforeach
					@endif
					<hr/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
