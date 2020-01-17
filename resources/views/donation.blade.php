<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap4.css">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Donation Page</title>
</head>

<body>


<nav class="navbar navbar-expand-lg my-nav">
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
</nav>


<div class="video-header wrap">
	<!-- <div class="fullscreen-video-wrap">
		<video src="video/loginvideotype3.mp4" autoplay muted loop ></video>
	</div> -->

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
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
								<!-<div class="menu-bar"><span class="lnr lnr-menu"></span></div> -->
							<!-- </div>  -->
		
		<h1>Donation SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
                 
                 <form action="" method="post" >
              {{ csrf_field() }}
              <div class="form-group col-md-8">
                   <div class="form-group row">
                    
                    
                  <div class="col-sm-9"> 
                      <!-- <input type="text" class="form-control hidden-xs" name="Donation_Item" 
                  value="" id="inputPassword4" placeholder="Donation_Item">
                    </div> -->
                    
				   <!-- <div class="col-lg-12 d-flex flex-column text">  -->
				   	
				<select name="type" class="form-control hidden-xs" required 
				style=" height: 50% width:80%">
						    <option data-display="Project you want to donate">Donate Item</option>
							 <option value="1">Food</option>
							 <option value="2">Cloth</option>
							 <option value="3">Book</option>
				</select>
					</div>
                    </div>
 

                  <div class="form-group row">
                    
                    <div class="col-sm-9">
                      <input type="text" class="form-control hidden-xs" name="Quantity"
                   value="" id="inputPassword4"  placeholder=" Quantity" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
                    </div>
                  </div>

                <div class="form-group row">
                    
                  <div class="col-sm-9 hidden-xs">
                     <!-- <div class="col-md-7" hidden-xs> -->
                       <select name="day" class="hidden-xs" style="width:50%">
                         <option value="day">Date</option>
                           <?php
                            for($i=1;$i<=31;$i++)
                             {
                               echo "<option value='".$i."'>$i</option>";
                                }
            				?>
         				 </select>
                      <!-- </div> -->

                   <select name="month" class="hidden-xs">
                   <option selected="selected">Month</option>
                  <option value="01">Jan</option>
                  <option value="02">Feb</option>
                  <option value="03">Mar</option>
                  <option value="04">Apr</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">Aug</option>
                  <option value="09">Sep</option>
                  <option value="10">Oct</option>
                  <option value="11">Nov</option>
                  <option value="12">Dec</option>
                </select>
                 

            <select name="year" class="hidden-xs">
            <option value="year">Year</option>
            <?php
            for($i=1950;$i<2050;$i++)
            {
              echo "<option value='".$i."'>$i</option>";
            }
            ?>
          </select>

                  </div>
                </div>

                <div class="form-group row">
                    
                    <div class="col-sm-9">
                     <input type="text" class="form-control hidden-xs" name="Unit"
                   value="" id="inputPassword4" placeholder="Unit" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Unit'" class="form-control mt-20" required="" type="text" required>
                    </div>
                  </div>

                  <!-- <div class="col-sm-9">
                     <input type="text" class="form-control hidden-xs" name="Unity"
                   value="" id="inputPassword4" placeholder="Unity">
                    </div>
                  </div>

                  <div class="col-sm-9">
                     <input type="text" class="form-control hidden-xs" name="Unity"
                   value="" id="inputPassword4" placeholder="Unity">
                    </div>
                  </div>
 -->

				<!-- <form action="#" method="post">

					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required=""> -->
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit"  value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
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
			<h1>DONATE</h1>
			<p>"We make a living by what we get, but we make a life by what we give."</p>
			<a class="btn btn-success my-btn mt-4">KNOW MORE &gt;</a>

		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
