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
                height:800px;
                width:1175px;
                margin-left:100px;

            }
            #login{
                color: black;
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
            <br><br><br><br><br>
            <div class="jumbotron col-xs-12 col-lg-8 col-lg-offset-2" id="jumbotron">
            	<h2 id="login">HOW DO YOU WISH TO DONATE?</h2>
                 <p style="margin-left: 10px;" id="login">Options shown as per your location:</p>
                <form action="" method="post">
                    {{ csrf_field() }}
            </div>

        </div>
    </div>

</body>
</html>
