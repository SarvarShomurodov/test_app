@extends('students.layout')

@section('content')
<br>
<div class="container">
  <a href="{{url('student')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
 <form action="{{url('student')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Surname</span>
        <input type="text" class="form-control" name="surname" placeholder="Surname" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-text">Description</span>
        <textarea name = "desc" class="form-control" aria-label="With textarea"></textarea>
      </div>
      <br>
      <div class="input-group mb-3">
        <input type="file" name="image" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
      </div>
      <button  type="submit" class="btn btn-primary">Add</button>
 </form>
</div>
@endsection
