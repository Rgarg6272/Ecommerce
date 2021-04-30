@extends('admin')
@section('title','view Product')


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
      <th scope="col">Product Name</th>
      <th scope="col">Product Size</th>
      <th scope="col">Category Id</th>
       <th scope="col">Product Description</th>
        <th scope="col">Product Quantity</th>
         <th scope="col">Product Price</th>
         <th scope="col">Product Image</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($data as $a)
  <tbody>
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->product_name}}</td>
      <td>{{$a->product_size}}</td>
       <td>{{$a->cat_id}}</td>
        <td>{{$a->product_description}}</td>
         <td>{{$a->product_quantity}}</td>
          <td>{{$a->product_price}}</td>
      <td><img src="{{ url('/upload/'.$a->product_image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
      <td>
        <a href="{{url('product/display/view/'.$a->id)}}" class="btn btn-primary">View</a>
        <a href="{{url('product/display/edit1/'.$a->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{url('product/display/delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
 @endforeach
</table>
   
@endsection