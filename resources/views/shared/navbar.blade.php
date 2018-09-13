<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
		<a class="nav-link" href="/contact">Contact</a>
      </li>
      <li>
			<div class="dropdown">
				<button class="btn btn-default btn-secondary dropdown-toggle nav-link bg-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;">
					Customers/Guests
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					@if (Auth::guest())
						<a class="nav-link" href="{{ route('login') }}">Login</a>
						<a class="nav-link" href="{{ route('register') }}">Register</a>
					@else
						<a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
					@endif
				</div>
			</div>
		</li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button id="btnSearch" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>