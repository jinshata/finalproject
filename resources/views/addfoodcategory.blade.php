@extends('admin')

@section('content')
<div class="col-sm-2">
<form style="margin-left: 200px;" method="POST" action="{{ URL('addfoodcategory') }}">
   {{ csrf_field() }}
 <div class="container">
  <!-- <div class="col-lg-10">
    <div class="card">
      <div class="card-body">
        <div class="col-lg-12"> -->
   <br><br><br> <h1>&nbsp;&nbsp;<font color="blue" style="margin-left: 5px; font-size: 40px;">ADD FOOD CATEGORY</font></h1>
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <form><br><br>
      <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Food Name:</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="foodcategory" id="txtfood"  placeholder="Food" style="font color: black;">
    
    </div>
  </div>



<br><button type="submit" style="background-color: #ff3300; color: white; margin-left: 130px;font-size:18px;width:90px;height:40px;"  class="btn">Submit</button>

   <a href="{{ URL::to('admin') }}" class="btn" role="button" style="width:90px;height:40px;font-size:18px;background-color:black;color:white;"><b>Cancel</b></a>
</form>
</div>
</div>



@endsection