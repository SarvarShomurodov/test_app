@extends('students.layout')

@section('content')
<br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Description</th>
        <th scope="col">Photo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->surname}}</td>
            <td>{{$student->desc}}</td>
            <td> <img src="images/{{$student->image}}" width="100px" height="100px"></td>
            <td>
                <a href="#" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a>
                <a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{url('student/create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Student</a>

@endsection
