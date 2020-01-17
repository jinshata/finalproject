@extends('admin')
@section('content')

<div class="container">
	<div class="col-md-6">
<form style="margin-left: 200px;" action="{{ URL('viewcloth') }}" method="POST" enctype="multipart/form-data">
                                      
   {{ csrf_field() }}
 <div class="container">
    <h1>&nbsp;&nbsp;<font color="#f2830c" style="">CLOTH DETAILS</font></h1>
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <br><br>
	<table class="table table-striped">
		<thead>
			<tr>
			   
			    <th scope="col"><font size="4"><b>clothid</b></font></th> 
				<th scope="col"><font size="4"><b>clothCategory</b></font></th>
				<th scope="col"><font size="4"><b>Quantity</b></font></th>
				<th scope="col"><font size="4"><b>Image</b></font></th>
				<th scope="col"><font size="4"><b><center>Action</b></font></center></th>
				<!-- <th scope="col">Pincode</th> -->
 

			 </tr>
		</thead>
		<tbody>
			@foreach($data as $view_cloth)
			
			<tr>
				
			    <td>{{$view_cloth->clothid}}</td> 
                <td>{{$view_cloth->clothcategory}}</td>
                <td>{{$view_cloth->quantity}}</td>
                <td><img src="{{asset('img/'.$view_cloth->image)}}" alt="image" width="100px" height="80px"></td>
                 
           <td><a href="{{URL::to('editcloth/'.$view_cloth->clothid)}}" class="btn" role="button" style="width:90px;height:40px;
            font-size:18px;background-color:#1D8311;color:white;"><b>Update</b></a></td>
            <td><a href="{{URL::to('deletecloth/'.$view_cloth->clothid)}}" class="btn" role="button" style="width:90px;height:40px;font-size:18px;background-color:#DC071A;color:white;"><b>Delete</b></a></td>
              
			  
			</tr>
			@endforeach
			

			
		</tbody>
		
	</table>
	
</div>
</form>
</div>
</div>

@endsection