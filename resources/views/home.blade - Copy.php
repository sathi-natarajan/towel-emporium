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
							<p style="border:solid;border-width: thin;">
								<table border="0" cellpadding="5" cellspacing="5">
									<colgroup>
										<col width="500"/>
										<col width="300"/>	
									</colgroup>
									<tr style="background-color: lightgray;">
										<td colspan="2">
											<h4>{{$towel->towelname}}</h4>
										</td>
									</tr>
									<tr>
										<td>
											<span style="text-align:center;">
												{{$towel->toweldescription}}
											</span>
										</td>
										<td>
											<a href="https://unsplash.it/1200/768.jpg?image=250" data-toggle="lightbox" data-max-width="600" data-footer="Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.Some long text.">
												<img class="img-fluid" src="{{ asset('images/barber-towels/basicblack.jpg') }}" alt="image of {{$towel->towelname}}" width="100" height="100"
											</a>
										</td>
									</tr>
								</table>
								<br/>
						@endforeach
					@endif
					<hr/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
