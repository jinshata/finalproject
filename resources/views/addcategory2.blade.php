<html>
<head>
	<title>ADMIN PAGE</title>
<style type="text/css">
	/*.colo{
	background-color: #e6f2ff;
	
		}*/
	#div1{
    background-color:#33adff;
    height: 70px;
  }
#div2{
  padding-top: 20px;
}


	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color:white">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12s" id="div1">
			<div class="col-md-6">
<!-- <div class="input-group" id="div2">

	<input type="text" class="form-control" placeholder="Search Facebook" size="20">
	<span class="input-group-btn">
		<button type="button" class="btn btn-default">Search</button>

	</span>
</div> -->
</div>
</div>
</div>

<form style="margin-left: 200px;">
 <div class="container">
    <h1>&nbsp;&nbsp;<font color="#f2830c" style="">Donation Category</font></h1>
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <form><br><br>
      <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Donation Items:</label>
        <div class="col-sm-4">
        <select id="selectitems" name="donationitems" class="form-control">
        <option selected>Choose...</option>
        <option>Food</option>
        <option>Cloths</option>
        <option>Books</option>
      </select>
    
    </div>
  </div>


   <br><button type="submit" style="background-color: #ff3300; color: white; margin-left: 135px;"  class="btn">Submit</button>
</div>







</body>
</html>