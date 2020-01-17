@extends('admin')

@section('content')
<div class="col-sm-2">
<form style="margin-left: 200px;" method="POST" action="{{ URL('addtoy') }}" 
enctype="multipart/form-data">
   {{ csrf_field() }}
 
 <div class="container">
    <h1>&nbsp;&nbsp;<font color="#ff0000" style="margin-left: 30px; font-size: 45px;">ADD TOY</font></h1>
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <br><br>
      <!-- <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Food Name:</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="foodname" id="txtfood"  placeholder="Enter Food Name"  style="font color: black;">
    
    </div>
  </div> -->

     <!-- <div class="col-sm-5">
      <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
        <div class="handle"></div>
      </button>
    </div> -->

  <!-- Default checked -->
<!-- <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
  <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
</div> -->


  


  <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Toy Category:</label>
        <div class="col-sm-4">
        <select id="selectitems" name="toycategory" class="form-control">
        <option selected>Select Toy</option>
                     @foreach($data as $pro_data) 
                       <option value="{{ $pro_data->toycategory }}">
                        {{ $pro_data->toycategory }} </option>
                      @endforeach 
                         </select>
    
    </div>
  </div>


  <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Description:</label>
        <div class="col-sm-4">
        <textarea class="form-control" name="description" row="8" id="txtcloth"  placeholder="Description of Cloth"  style="font color: black; height: 60px; "></textarea>
    
    </div>
  </div>

   <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Quantity:</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="quantity" id="txtcloth"  placeholder="Enter Quantity"  style="font color: black;">
    
    </div>
  </div>

 <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Upload Toy Image:</label>
        <div class="col-sm-4">
        <input type="file" class="form-control" name="image" id="txtcloth"  placeholder=""  style="font color: black;">
    
    </div>
  </div>


   <br><button type="submit" style="background-color: #ff3300; color: white; width:90px;height:40px; font-size:18px;margin-left: 35px;"  class="btn"><b>Submit</b></button>

    <td><a href="{{URL::to('viewtoy')}}" class="btn" role="button" style="width:90px;height:40px;
            font-size:18px;background-color:#1D8311;color:white;"><b>View</b></a></td>
     <td><a href="{{ URL::to('admin') }}" class="btn" role="button" style="width:90px;height:40px;
            font-size:18px;background-color:black;color:white;"><b>Cancel</b></a></td>       
</form>
</div>
@endsection