@extends('admin')

@section('content')
<div class="col-md-6">
<form style="margin-left: 200px;">
 <div class="container">
    <h1>&nbsp;&nbsp;<font color="#f2830c" style="">Donation Category</font></h1>
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <form><br><br>
      <div class="form-group row">
      <label class="control-label col-sm-12"  for="donationitems" style="font color: black;">Category:</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="addcategory" id="txtcategory"  placeholder="addcategory"  style="font color: black;">
    
    </div>
  </div>


   <br><button type="submit" style="background-color: #ff3300; color: white; margin-left: 135px;"  class="btn">Submit</button>
   <br><a href="{{ URL::previous() }}" class="btn" role="button" style="background-color: #ff3300; color: white; margin-left: 135px;"  class="btn">Go Back</button>
</div>
</form>
</div>
@endsection
