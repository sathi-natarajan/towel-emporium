<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#cd6090;">
  <a class="navbar-brand" href="#">Towel Emporium, Inc.&trade;</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
		<a class="nav-link" href="/">Home</a></li>
      </li>
      <li class="nav-item">
		<a class="nav-link" href="/about">About</a>
      </li>
	  <li class="nav-item">
		<a class="nav-link" href="/contactus">Contact</a>
      </li>
      <li>
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle nav-link" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;background-color:#cd6090;">
					Customers
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					@if (Auth::guest())
						<a class="nav-link towel-emp-login-links" href="{{ route('login') }}">Login</a>
						<a class="nav-link towel-emp-login-links" href="{{ route('register') }}">Register</a>
					@else
						<a class="nav-link towel-emp-login-links" href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
					@endif
				</div>
			</div>
		</li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border: 2px solid #00cd00;background-color:#ffffff;">
      <button id="btnSearch" class="btn btn-success my-2 my-sm-0" type="submit" style="border: 2px solid #00cd00;background-color:#00cd00;color:#000000;">Search</button>
    </form>
  </div>
</nav>
