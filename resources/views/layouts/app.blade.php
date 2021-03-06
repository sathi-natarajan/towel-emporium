<html>
<head>
<title> @yield('title') </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<link href="{{ asset('css/ekko-lightbox.css') }}" rel="stylesheet">
<script src="{{ asset('js/ekko-lightbox.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>

<link href="{{ asset('css/site.css') }}" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
			
<script>
$(document).ready(function(){
	//Search button
    $("#btnSearch").click(function(e){
		e.preventDefault();
		swal({
		  title: '<strong>This feature is not yet implemented.  Please retry later.</strong>',
		  type: 'info'
		});
	});
	
	//Click on a towel to display enlarged imagein popup
	 $(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery-11"])', function(event) {
				event.preventDefault();
				return $(this).ekkoLightbox({
					onShown: function() {
						if (window.console) {
							return console.log('Checking our the events huh?');
						}
					},
					onNavigate: function(direction, itemIndex) {
						if (window.console) {
							return console.log('Navigating '+direction+'. Current item: '+itemIndex);
						}
					}
				});
			});
			
	 // disable wrapping
	$(document).on('click', '[data-toggle="lightbox"][data-gallery="example-gallery-11"]', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			wrapping: false,
		});
	});
							
	/* //towel image thumbnails
	$(".imgProductThumbs").click(function(e){
		e.preventDefault();
		swal({
		  title: '<img src="someimage.jpg"/>',
		  type: 'info'
		});
	}); */
});         
</script>
		
</head>
<body>
@include('shared.navbar')
<div class="well" style="padding:2px 5px 0px 5px;background-color:#f0ecec;">
	<form class="form-inline">
		  <table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>&nbsp;&nbsp;&nbsp;<strong>{{{ isset(Auth::user()->name) ? Auth::user()->name : "" }}}</strong></td>
				<td>
					<div class="dropdown" style="margin-left:75%;font-weight:bold;">
					Catagory:
					<button class="btn btn-default btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;color:black;background-color:#cd6090;">
						Barber towels
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="nav-link towel-catagory" href="{{ url('/barber-towels') }}">Barber towels</a>
						<a class="nav-link towel-catagory" href="{{ url('/carwash-towels') }}">Car wash towels</a>
					</div>
				</div>
				</td>
			</tr>
		  </table>
	</form>
</div>
<br/>
<p>
	@yield('content')
</p>

<!-- Footer -->
<footer class="page-footer font-small blue navbar-fixed-bottom">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" >© 2018 Copyright:
    Towel Emporium, Inc.  All rights reserved.</br/>
	<small>(Web application version 1)</small>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>