@extends ('layouts.master')

@section('title','Show Information')
@section('Content')

<ul class="list-group">
	<h1>{{$student->name}}</h1>
	<h1>{{$student->email}}</h1>
	<h1>{{$student->address}}</h1>
	<h1>{{$student->mobile}}</h1>
</ul>
    @endsection
