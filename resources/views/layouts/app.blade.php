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
	
	//towel image thumbnails
	$(".imgProductThumbs").click(function(e){
		e.preventDefault();
		swal({
		  title: '<img src="someimage.jpg"/>',
		  type: 'info'
		});
	});
});
</script>
		
</head>
<body>
@include('shared.navbar')
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