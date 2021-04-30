@extends('admin')
@section('title','View Coupen')


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
      <th scope="col">Coupen Code</th>
      <th scope="col">Amount</th>
      <th scope="col">Amount Type</th>
      <th scope="col">Expiry Date</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($data as $a)
  <tbody>
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->coupen_code}}</td>
      <td>{{$a->amount}}</td>
      <td>{{$a->amount_type}}</td>
      <td>{{$a->expiry_date}}</td>
      <td>
      <a href="{{url('coupen/display/view/'.$a->id)}}" class="btn btn-primary">View</a>
      <a href="{{url('coupen/display/edit/'.$a->id)}}" class="btn btn-warning">Edit</a>
      <a href="{{url('coupen/display/delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
 @endforeach
</table>
   
@endsection