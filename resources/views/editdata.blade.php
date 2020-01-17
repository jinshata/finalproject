@extends('admin')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="container">
  <div class="col-md-6">

 <form style="margin-left: 200px;" action="{{ url('update') }}" method="POST">
   {{ csrf_field() }}
   <input type="hidden" name="id" value="{{ $data->register_id }}">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="container">
    <h1>&nbsp;&nbsp;<font color="#f2830c" style="">USER DETAILS</font></h1>
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <br><br>
  <table class="table table-striped">


 
  <div class="form-group row">
    <label for="exampleInputEmail1" class="col-sm-12">FullName</label>
    <div class="col-sm-4">
    <input type="text" class="form-control col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" name="fullname" value="{{$data->fullname}}" >
    </div>
</div>
  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-12">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{$data->address}}">
  </div>
</div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-12">Gender</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="gender" value="{{$data->gender}}">
  </div>
</div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-12">Contact No</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="contactno" value="{{$data->contactno}}">
  </div>
</div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-12">District</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="district_name" value="{{$data->district}}">
  </div>
</div>

  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-12">State</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="state_name" value="{{ $data->state }}">
  </div>


  <div class="form-group row">
    <label for="exampleInputPassword1" class="col-sm-12">Country</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="country_name" value="{{ $data->country }}">
  </div>
  
  <button type="submit" style="background-color: #ff3300; color: white; margin-left: 135px;"  class="btn">Submit</button>
</form>
</table>