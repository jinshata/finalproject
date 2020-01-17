@extends('admin')
@section('content')

<div class="container">
	<div class="col-md-6">
<form style="margin-left: 200px;" action="{{ URL('viewprofile') }}" method="POST">
   {{ csrf_field() }}
 <div class="container">
    <h1>&nbsp;&nbsp;<font color="#f2830c" style="">USER DETAILS</font></h1>
    <!-- <hr class="col-sm-3" style="margin-left: 1px;"> -->
     <br><br>
	<table class="table table-striped ">
		<thead>
			<tr>
			   
			    <th scope="col"><font size="4"><b>Registerid</b></font></th> 
				<th scope="col"><font size="4"><b>FullName</b></font></th>
				<th scope="col"><font size="4"><b>Address</b></font></th>
				<th scope="col"><font size="4"><b>Gender</b></font></th>
				<th scope="col"><font size="4"><b>ContactNo</b></font></th>
				<th scope="col"><font size="4"><b>District</b></font></th>

				<th scope="col"><font size="4"><b>State</b></font></th>
				<th scope="col"><font size="4"><b>Country</b></font></th>
				<th scope="col"><center><font size="4"><b>Action</b></font></center></th>
				<!-- <th scope="col">Pincode</th> -->
 

			 </tr>
		</thead>
		<tbody>
			@foreach($data as $view_data)
			
			<tr>
				
			    <td>{{$view_data->register_id}}</td> 
                <td>{{$view_data->fullname}}</td>
                <td>{{$view_data->address}}</td>
                <td>{{$view_data->gender}}</td>
                <td>{{$view_data->contactno}}</td>
                <td>{{$view_data->district}}</td>
                <td>{{$view_data->state}}</td>
                <td>{{$view_data->country}}</td>
                  <!-- <td>{{$view_data->pincode}}</td> -->
           <td><a href="{{URL::to('editdata/'.$view_data->register_id)}}" class="btn" role="button" style="width:90px;height:40px;
            font-size:18px;background-color:#1D8311;color:white;"><b>Update</b></a></td>
            <td><a href="{{URL::to('deletedata/'.$view_data->register_id)}}" class="btn" role="button" style="width:90px;height:40px;font-size:18px;background-color:#DC071A;color:white;"><b>Delete</b></a></td>
              <td><a href="{{URL::to('userreject/'.$view_data->fk_login_id)}}" class="btn" role="button" style="width:90px;height:40px;font-size:18px;background-color:#DC071A;color:white;"><b>Reject</b></a></td>
               
			  
			</tr>
			@endforeach
			

			
		</tbody>
		
	</table>
	
</div>
</form>
</div>
</div>

@endsection