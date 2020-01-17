
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        <style type="text/css">
        	#Admin{
        		color: white;
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
                color: white;
            }
            #login{
                color: white;
                text-align: center;
            }
            a{
                color: white;
            }
            /*.jumbotron{
                background-image: url(image_5);
            }*/
        	
        </style>
</head>
<body id="qw">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12" id="Admin">
				<img src="img/log.png" width="85px;" height="75px;">
			</div>
		</div>
		<div class="row">
            <br><br>
            <div class="jumbotron col-xs-12 col-lg-8 col-lg-offset-2" id="jumbotron""> 
              @yield('content')
                <h2 id="login">HELP US WITH YOUR EXACT LOCATION</h2>
                 <p style="margin-left: 120px;"> This allows us to check if your area is within our coverage</p>
                <form action="" method="post">
                    {{ csrf_field() }}
  <br><!-- <div class="input-group col-md-4">
      <input class="form-control py-2" type="search" value="search" id="example-search-input">
      <span class="input-group-append">
        <button class="btn btn-outline-secondary" type="button">
            <i class="fa fa-search"></i>
        </button>
      </span>
</div> -->
   <div class="input-group col-lg-8 col-lg-offset-2">
   	<form action="{{ URL('donate') }}"  method="POST" >
   		{{ csrf_field() }}
    <input type="text" class="form-control" name="place" id="place" placeholder="Search" >
    <div id="placelist">
    	<ul id="places">


      </ul>
    </div>
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  
</form>
                
            </div>
        </div>
	</div>
	<br>

	</body>
    </html>
   
   <script>
   	$(document).ready(function(){
   		$('#place').keyup(function(){
   			var query = $(this).val();
   			console.log(query);
   			if(query != '')
   			{
   				var _token = $('input[name=" _token"]').val();
   				$.ajax({
   					url: "{{ route('donate') }}",
   					method: "POST",
   					data:{query:query, _token:_token},
   					success:function(resp){
   						console.log("success");
   						console.log(resp);
              $("#places").empty();
              for(r of resp){
                console.log(r['place']);
                $("#places").append("<li>"+r['place']+"</li>")
              }
   						// $('#placelist').fadeIn();
   						//   $('#placelist').html(data);
   					},
   					error:function(err){
   						console.log(err);
   					}
   				});
   			}
   		});

   		$(document).on('click','li',function(){
   			$('#place').val($(this).text());
            $('#placelist').fadeOut();
   		});
   	});
   </script>


	


