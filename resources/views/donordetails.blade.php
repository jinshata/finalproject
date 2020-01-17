
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
                background-color:#D3D3D3;
                color: black;
                margin-left: 10px;
                height: 700px;
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
      <br><br>
 
<form style="margin-left: 10px;">
 <div class="container">

  <a href="{{URL::to('donorhistory/')}}" class="btn" role="button"  style="width:90px;height:40px; margin-top: 50px; float: left;
            font-size:18px;background-color:black;color:white;">History</b>
            </a>
   <div class="jumbotron col-xs-12 col-lg-10 col-lg-offset-2" id="jumbotron" style="margin-left: 100px;"> 
    <h1>&nbsp;&nbsp;<font color="black" style=""><center>Receiver Request</center></font></h1>


    <form style="margin-left: 200px;" action="{{ URL('donordetails') }}" 
    method="get" enctype="multipart/form-data">
                                      
   {{ csrf_field() }}
  <div class="container">
    
    <!-- <a href="{{URL::to('confirm/')}}" class="btn" role="button"  style="width:90px;height:40px;
            font-size:18px;background-color:#25a105;color:white;">Confirm</b>
            </a> -->
     <br><br><br><br><br><br>
  <table class="table table-striped">
    <thead>
      <!-- <tr>
         
        <th scope="col"><font size="4"><b>Receiverid</b></font></th> 
        <th scope="col"><font size="4"><b>Item</b></font></th>
        <th scope="col"><font size="4"><b>Quantity</b></font></th>
        <th scope="col"><font size="4"><b>Date</b></font></th>
        <th scope="col"><font size="4"><b><center>Action</b></font></center></th>
        
      </tr> -->
    </thead>
    <tbody>
      @foreach($data as $view_data)
      
      <tr>
        
          <td>{{$view_data->fk_receiver_id}}</td>  
          <td>{{$view_data->subcategory}}</td>
          <td>{{$view_data->quantity}}</td>
          <td>{{$view_data->needdate}}</td>
          <!-- <a class="btn btn-primary" href="{{URL::to('confirm/'.$view_data->receiver_id)}}"><i class="fa fa-edit"></i></a>
      <a class="btn btn-danger" href="{{URL::to('confirm/'.$view_data->receiver_id)}}"><i class="fa fa-trash"></i></a> -->
          <td>
           @if($view_data->status)  
            <a href="{{URL::to('confirm/'.$view_data->id.'/'.$view_data->fk_receiver_id)}}" class="btn" role="button" style="width:90px;height:40px; 
            font-size:18px;background-color:#25a105;color:white;">Confirm</b>
            </a>
            @else
            confirmed
            @endif
          </td>
 
      </tr>
     @endforeach
     
    </tbody>
    

   <!--  <form style="margin-left: 200px;" action="{{ URL('donordetails') }}" 
    method="POST" enctype="multipart/form-data">
                                      
   {{ csrf_field() }}
  <div class="container"> -->
    
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <!-- <br><br>
  <table class="table table-striped">
    <thead>
      <tr>
         
        <th scope="col"><font size="4"><b>Receiverid</b></font></th> 
        <th scope="col"><font size="4"><b>Item</b></font></th>
        <th scope="col"><font size="4"><b>Quantity</b></font></th>
        <th scope="col"><font size="4"><b>Date</b></font></th>
        <th scope="col"><font size="4"><b><center>Action</b></font></center></th>
        
      </tr>
    </thead>
    <tbody> -->
      <!-- @foreach($data as $view_data) -->
      
     <!--  <tr>
        
          <td>{{$view_data->receiver_id}}</td> 
          <td>{{$view_data->subcategory}}</td>
          <td>{{$view_data->quantity}}</td>
          <td>{{$view_data->needdate}}</td>
          <td><a href="{{URL::to('confirm/'.$view_data->receiver_id)}}" class="btn" role="button" style="width:90px;height:40px;
            font-size:18px;background-color:#1D8311;color:white;"><b>Confirm</b></a></td>
 
      </tr>
     @endforeach -->
     
    <!-- </tbody> -->

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
