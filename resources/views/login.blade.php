<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap4.css">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login Page</title>
</head>

<body>


<!-- <nav class="navbar navbar-expand-lg my-nav">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->


<!-- <div class="video-header wrap">
	<div class="fullscreen-video-wrap">
		<video src="video/loginvideotype3.mp4" autoplay muted loop ></video>
	</div>
 -->
	<div class="header-overlay">
		<div class="header-content">
<!-- main -->
	<!-- <div class="main-w3layouts wrapper">
		<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#project">Projects</a>
									<a href="#about">About</a>
									<a href="#donate">Donate</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div> -->
								<!-- <div class="menu-bar"><span class="lnr lnr-menu"></span></div> -->
							<!-- </div> -->
		
		<h1 style="font-family:arial;"><b>LOGIN<b></h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="POST" action="{{ URL('login') }}">
                {{ csrf_field() }}
				
					<input class="text email" type="email" name="email" placeholder="Email" required aria-required="true">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text"><br>
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms and Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="LOG IN">
				
				<p>Don't have an Account? <a href="{{url('/signup') }}"> Sign Up Now!</a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
			<!-- <h1>DONATE</h1>
			<p>"We make a living by what we get, but we make a life by what we give."</p>
			<a class="btn btn-success my-btn mt-4">KNOW MORE &gt;</a>
 -->
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</form>
</body>
</html>