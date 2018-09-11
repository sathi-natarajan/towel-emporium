<html>
<head>
<title> @yield('title') </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
@include('shared.navbar')

@yield('content')
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 navbar-fixed-bottom" >© 2018 Copyright:
    <a href="https://www.towel-emporium.com"> Towel Emporium, Inc.  All rights reserved.</a></br/>
	<small>Version 1</small>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>