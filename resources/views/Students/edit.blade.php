@extends ('layouts.master')
@section('title','Create Students')
@section('content')

    <form action="{{route('students.update',['id'=>$student->id])}}" method="POST" role="form">
        {{csrf_field()}}
        {{method_field('PATCH')}}

        <legend>Create a new Student</legend><br><br>

        <div class="form-group">
            <label for=""></label>
            <input type="text" class="form-control" name="name" id="" value="{{$student->name}}" placeholder="Input Your Name ..."><br><br>
            <input type="text" class="form-control" name="email" id="" value="{{$student->email}}" placeholder="Input Your Email ..."><br><br>
            <input type="text" class="form-control" name="address" id="" value="{{$student->address}}" placeholder="Input Your Address ..."><br><br>
            <input type="text" class="form-control" name="mobile" id="" value="{{$student->mobile}}"placeholder="Input Your Mobile ..."><br><br>

        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection