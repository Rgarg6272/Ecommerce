@extends('admin')
@section('title','view Category')


@section('content')
 @if(session('message'))

  <p class ="alert alert-success">
      {{session('message')}}
  </p>
  @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($data as $a)
  <tbody>
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->name}}</td>
      <td>{{$a->description}}</td>
      <td><img src="{{ url('/upload/'.$a->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
      <td>
        <a href="{{url('display/view/'.$a->id)}}" class="btn btn-primary">View</a>
        <a href="{{url('display/edit/'.$a->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{url('display/delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
 @endforeach
</table>
   
@endsection