@extends ('layouts.master')

@section('title','Homepage')

@section('content')



	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

	<div class="header"><h4><a href="{{route('students.create')}}">Create A Student</a></h4>

		<h4><a href="">Show The List of Student</a></h4>

	</div>


    <ul class="list-group">

		@foreach($students as $student)
    	<li class="list-group-item">

			Name is :<a href="{{route('students.show',['id'=>$student->id])}}">{{$student->name}}</a><br>
			Email is :<a href="">{{$student->email}}</a><br>
			Address is :<a href="">{{$student->address}}</a><br>
			Mobile is :<a href="">{{$student->mobile}}</a><br>
		</li>

			<div class="edit"><h4><a href="{{route('students.edit',['id'=>$student->id])}}">Edit</a></h4></div>
			<form action="{{route('students.destroy',['id'=>$student->id,])}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button type="submit" class="btn btn-danger btn-sm">Delete</button><hr>



			</form>
			@endforeach

    </ul>
    
    @endsection