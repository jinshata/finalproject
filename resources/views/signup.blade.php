<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap4.css">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>SIGN UP</title>
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


<div class="video-header wrap">
	<!-- <div class="fullscreen-video-wrap">
		<video src="video/loginvideotype3.mp4" autoplay muted loop ></video>
	</div> -->

	<div class="header-overlay">
		<div class="header-content">
<!-- main -->
	<div class="main-w3layouts wrapper">
		<!-- <div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#project">Projects</a>
									<a href="#about">About</a>
									<a href="#donate">Donate</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>  -->
								<!-- <div class="menu-bar"><span class="lnr lnr-menu"></span></div> -->
							  
		
		<h2><b style="font-family: arial;">SIGNUP</b></h2>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form  method="POST" action="{{ URL('home') }}" > 
				{{ csrf_field() }}		

					<input class="text" type="text" name="fullname" placeholder="Enter your fullname" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<!-- <input class="text w3lpass" type="password" name="confirmpassword" placeholder="Confirm Password" required=""> -->
					<input class="text w3lpass" type="text" name="address" placeholder="Address" required="">
					<label class="custom-control-label" for="customRadioInline1">
                    <input type="radio" class="custom-control-input" name="gender" value="male">Male
                   </label>
                   
                   <!-- <div class="form-check-inline"> -->
                   <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="gender" value="female">Female
                   </label>
					<input class="text w3lpass" type="text" name="contactno" placeholder="Contact No" required="">

					<select id="selectitems" name="district_name" class="form-control">
						
						<option selected>Select District</option>
						 @foreach($data as $pro_data) 
                       <option value="{{ $pro_data->district_id }}">
                       	{{ $pro_data->district_name }} </option>
                         @endforeach 

			        </select>

			        <input class="text w3lpass" type="text" name="state_name" placeholder="State Name" required="">

			        <input class="text w3lpass" type="text" name="country_name" placeholder="Country Name" required="">
			        <!-- <select id="selectitems" name="state_name" class="form-control" >
				        <option selected>Select State</option>
				        <option></option>
				        <option></option>
				        <option></option>
			        </select>
			        <select id="selectitems" name="country_name"  class="form-control">
				        <option selected>Select Country</option>
				        <option></option>
				        <option></option> 
			      </select> -->
   
       <input class="text w3lpass" type="text" name="pincode" placeholder="Pincode" required="">

       <select id="selectitems" name="usertype" class="form-control">
						
						<option selected>Select Usertype</option>
						<option value="Donor">Donor</option>
						<option value="Receiver">Receiver</option>

						 <!-- @foreach($data as $pro_data) 
                       <option value="{{ $pro_data->district_id }}">
                       	{{ $pro_data->district_name }} </option>
                         @endforeach  -->

			        </select>
					<!-- <input class="text w3lpass" type="text" name="country" placeholder="country" required="">  -->
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms and Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit"  name="signup" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="{{url('login') }}" ><!-- <font color=" #00ff00;"> --> Log In Now!</a></p>
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
</body>
</html>
