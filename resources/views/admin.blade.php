<html>
<head>
	<title>ADMIN PAGE</title>
<style type="text/css">
	/*.colo{
	background-color: #e6f2ff;
	
		}*/
	#div1{
    background-color: #1C89E5;
    height: 10%;
  }
#div2{
  padding-top: 20px;
}
.container-fluid{ background-image: url('img/adminbackground.jpg');
background-size: 100%;
}


	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color:">
  <div class="container-fluid" >
	<div class="row">

		<div class="col-md-12" id="div1">
     <div class="col-md-6">
      <H3><b><font color="white" style="padding: 45px;vertical-align: middle; "><img src="img/admin1.png" width="6%;"> ADMIN</font></b></H3>
      <a href="{{ url('logout') }}" role="button" class="btn btn-link btn-logout" style="">Logout</a>

       
</div>

</div>

</div>


<div class="container">
  <div class="row">
 <div class="col-xs-3" style=" height: 90%; opacity: 0.7; margin-top: 0px;  ">
  <aside class="sidebar">
                    <div class="sidebar-container" style=" width: 232px; height: 90%; background-color: #40CFD2;opacity: 0.7; margin-top: 0px; margin-left: 1px;">
                        <div class="sidebar-header">
                           
                         
               
<nav class="menu">
  <ul class="sidebar-menu metismenu" id="sidebar-menu"><br>
   

<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="food" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" width: 169px; height: 50px; margin-top: 20px;background-color:#ff3300;color: white;  ">
DONATION TYPES
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby ="food">
<li><a href="{{URL('addfood')}}">Food</a></li>
<li><a href="{{URL('addcloth')}}">Cloths</a></li>
<li><a href="{{URL('addtoy')}}">Toys</a></li>
</ul>
</div>
      
        <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="food" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" width: 169px; height: 50px; margin-top: 20px;background-color:#ff3300;color: white;  ">
   DONATIONCATEGORY
   <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" aria-labelledby ="food">
   <li><a href="{{URL('addfoodcategory')}}">AddFoodCategory</a></li>
   <li><a href="{{URL('addclothcategory')}}">AddClothCategory</a></li>
   <li><a href="{{URL('addtoycategory')}}">AddToysCategory</a></li>
   </ul>
   </div>
       <!-- <a href="{{URL('addcategory')}}">
    <input type="button" value="Add Category" class="head-btn btn text-uppercase" style=" width: 165px; height: 50px; margin-top: 20px;background-color:#ff3300;color: white; " >
      </a></button> -->

    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="food" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" width: 169px; height: 50px; margin-top: 20px;background-color:#ff3300;color: white;  ">
   SUBCATEGORY
   <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" aria-labelledby ="food">
   <li><a href="{{URL('addsubcategory')}}">Add subcategory</a></li>
   <li><a href="View">View</a></li>
   <li><a href="Edit">Edit</a></li>
   </ul>
   </div>

   <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="food" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" width: 169px; height: 50px; margin-top: 20px;background-color:#ff3300;color: white;  ">
   LOCATION
   <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" aria-labelledby ="food">
   <li><a href="{{URL('adddistrict')}}">Add District</a></li>
   <li><a href="{{URL('addstate')}}">Add State</a></li>
   <li><a href="{{URL('addcountry')}}">Add Country</a></li> 
   </ul>
   </div>

   <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="userdetails" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" width: 169px; height: 50px; margin-top: 20px;background-color:#ff3300;color: white;  ">USER DETAILS
   
   <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" aria-labelledby ="food">
   <li><a href="{{URL('viewprofile')}}">View Profile</a></li>
   <li><a href="{{URL('editdata')}}">Update Profile</a></li>
   <li><a href="{{URL('deleteprofile')}}">Delete Profile</a></li> 
   </ul>
   </div>
      <br>
      <br>
    
  </ul>
  
  </nav>
  </div>
  
  
</div>

</aside>
</div>
<div class="col-xs-8" style=" height: 90%;">
     @yield('content') 
</div>
</div>
</div>

</body>
</html>
        

