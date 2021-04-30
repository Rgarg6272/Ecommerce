@extends('admin')
@section('title','Add Category')


@section('content')
<form method="post" action="{{url('update')}}" enctype="multipart/form-data">
  @if(session('message'))

  <p class ="alert alert-success">
      {{session('message')}}
  </p>
  @endif
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$data->description}}">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <br>
    <img src="{{ url('/upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
    <input type="file" name="image" class="form-control" id="exampleInputPassword1" value="{{$data->image}}">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
   
@endsection