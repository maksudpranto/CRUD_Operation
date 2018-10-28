@extends ('layouts.master')
@section('title','Create Students')
@section('content')


	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
 <div class="create">

	 <form action="{{route('students.store')}}" method="POST" role="form">
		 {{csrf_field()}}

		 <legend>Please Fill Up The FORM</legend><br><br>

		<div class="form">
			<div class="form-group">
				<label for=""></label>
				Input Your Name: <input type="text" class="form-control" name="name" id="" required ><br><br>
				Input Your Email:    <input type="text" class="form-control" name="email" id="" required ><br><br>
				Input Your Address:<input type="text" class="form-control" name="address" id="" required ><br><br>
				Input Your Mobile:<input type="text" class="form-control" name="mobile" id="" required><br><br>

			</div>
		</div>



		 <button type="submit" class="btn btn-primary">Submit</button>
	 </form>

 </div>
    
    
    @endsection