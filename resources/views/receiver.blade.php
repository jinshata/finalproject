
<!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Charity</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css/linearicons.css">=
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/nice-select.css">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
        //var counter = $('#TextBox').val();
        $('#AddButton').click( function() {
            var counter = $('#AddTextBox').val();
            counter++ ;
            $('#AddTextBox').val(counter);
    });
});
</script>

<script>
//   $(document).ready(function(){
//         //var counter = $('#TextBox').val();
//         $('#SubButton').click( function() {
//             var counter = $('#SubTextBox').val();
//             counter-- ;
//             $('#SubTextBox').val(counter);
//     });
// });

var x = 0;

document.getElementById('output-area').innerHTML = x;

function button1() {
  document.getElementById('output-area').innerHTML = ++x;
}

function button2() {
  document.getElementById('output-area').innerHTML = --x;
}
</script>

<style type="text/css">
          #Admin{
           /* color: white;*/
            background-color: #082F5B;
            
          }
          #div1{
            background-color: black;
            color: white;
          }
          #qw{
            background-color: #f3f2f7;
          }
            .btn{
                background-color:   orange;
                color: white;
            }

             #jumbotron{
                background-color: #09A9A0;
                color: black;
            }
            #login{
                color: white;
                text-align: center;
            }
            a{
                color: black;
            }
            /*.jumbotron{
                background-image: url(image_5);
            }*/
          
  #output-area{width: 50px;height: 50px;}
</style>
    </head>
    <body>

      <!-- Start Header Area -->
      <header class="default-header" style="background-color: #ffff;">
        <div class="container">
          <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="#home"><img src="img/logo.png" alt=""></a>
              </div>
              <div class="main-menubar d-flex align-items-center">
                <nav class="hide">
                  <a href="#home">Home</a>
                  <a href="#project">Projects</a>
                  <a href="#about">About</a>
                  <a href="#donate"><input type="button" class="head-btn btn text-uppercase" value="Donate" ></a>
                  <a href="{{url('login')}}"><img src="images/login.png" width="40px;" height="35px;"> Login</a>
                </nav>
                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <br>
 
<form style="margin-left: 10px;" method="POST" action="{{ URL('receiver') }}" 
enctype="multipart/form-data">
   {{ csrf_field() }} >
 
 <div class="container">
   <div class="jumbotron col-xs-12 col-lg-8 col-lg-offset-2" id="jumbotron" 
   style="margin-left: 30px;">

    <h1>&nbsp;&nbsp;<font color="black" style=" margin-top: 1px;"><center>Send Request</center></font></h1><br>

   @if($notification)
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{$notification['quantity']}} &nbsp; {{$notification['subcategory']}}<b style="color: black;"> ready to donate.</b>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
@endif

    <!-- <h1>&nbsp;&nbsp;<font color="black" style=""><center>NEED  &nbsp;NOW</center></font></h1> -->
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->

     <form method="POST" action=""><br>
     {{ csrf_field() }}  

      <a href="{{URL::to('viewnotification/')}}" class="btn" role="button"  style="width:120px;height:40px; margin-top:10px;  
            font-size:18px;background-color:#25a105;color:white;">Notification</b>
            </a> <br>
            <br><br>

      <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Your Need:</label>
        <div class="col-sm-6">
        <select id="selectitems" name="needtype" class="form-control">
        <option selected class="col-lg-offset-2">Choose...</option>
        <option>Food</option>
        <option>Cloths</option>
        <option>Toys</option>
      </select>
    
    </div>
  </div>

  <div class="form-group row">
    <label class="control-label col-sm-12" for="name">SubCategory:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="subcategory" id="txtname"  placeholder="Subcategory" value="" style="font color: black;">
  </div>
  </div>

  <div class="form-group row">
      <label  class="control-label col-sm-12" for="quantity">Quantity:</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="quantity" id="txtquantity"  placeholder="Quantity" style="font color: black;">
    </div>
  </div>

  <!-- <div class="form-group row">
      <label  class="control-label col-sm-12" for="quantity">Place:</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="place" id="txtquantity"  placeholder="Place" style="font color: black;">
    </div>
  </div> -->

  <!-- <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">SubCategory:</label>
        <div class="col-sm-4">
        <select id="selectitems" name="donationitems" class="form-control">
        <option selected>Choose...</option>
        <option></option>
        <option></option>
        <option></option>
      </select>
    
    </div>
  </div> -->
  
  <!-- <div class="form-group row">
    <label class="control-label col-sm-12" for="name">Name:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="fullname" id="txtname"  placeholder="name" value="" style="font color: black;">
  </div>
  </div>
  
  <div class="form-group row">
    <label class="control-label col-sm-12" for="contactno">Contact No:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="contactno" id="txtcontactno"  placeholder="contactno"  value="" style="font color: black;">
  </div>
  </div> -->



    

<!-- <div class="form-group row">
<div class="col-sm-6">
 <input type=button value="+" onclick="button1()" value="0" data-prod-id="4324" data-unit-weight="0.45" style="width: 40px;height: 40px;" />
 
 <span id="output-area" class="col-sm-4"></span>

<input type=button value="-" onclick="button2()" value="0" data-prod-id="14834" data-unit-weight="0.85" style="width: 40px;height: 40px;"/>
</div>
</div> -->

<!-- <input type="text" name="TextBox" id="AddTextBox" value="0" />
<input type="Button" id='AddButton' value="+" />
<input type="text" name="TextBox" id="SubTextBox" value="0" />
<input type="Button" id='SubButton' value="-" /> -->


<!-- <div class="form-group row">
<div class="col-sm-4">

</div>
</div> -->

 
  <!-- <div class="form-group row">
    <label class="control-label col-sm-12" for="unity">Unit:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="unit" id="txtunit"  placeholder="unit"  style="font color: black;">
  </div>
  </div> -->

  <div class="form-group row">
  <label class="control-label col-sm-12" for="date">Date:</label>
    <!-- <div class="col-sm-4">  -->
    &nbsp; &nbsp;<select name="day" class="hidden-xs col-sm-2" style="font color: black;">
            <option value="day">Date</option>
            <?php
            for($i=1;$i<=31;$i++)
            {
              echo "<option value='".$i."'>$i</option>";
            }
            ?>
          </select>


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
            for($i=2000;$i<2030;$i++)
            {
              echo "<option value='".$i."'>$i</option>";
            }
            ?>
          </select>
  </div>
 

  <!-- <div class="form-group row">
    <label class="control-label col-sm-12" for="category">Category Id:</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="categoryid" id="txtunit"  placeholder="category"  style="font color: black;">
  </div>
  </div>


  &nbsp;&nbsp;<div class="form-group row">
      <label  class="control-label col-sm-12" for="quantity">Donor Id:</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" name="userid" id="txtquantity"  placeholder="donorid" style="font color: black;">
    </div>
  </div> -->
    
    <br><button type="submit" style="background-color: #ff3300; color: white; margin-left: 135px;"  class="submit-btn primary-btn text-uppercase ">Send<span class="lnr lnr-arrow-right"></span></button>


    
  </center>              
</div>
 </form>



      <script src="js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/jquery.nice-select.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/parallax.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/main.js"></script>
     
    </body>
  </html>
