@extends('admin')
@section('title','View Data')


@section('content')

<h1>{{$data->id}}</h1>
<h1>{{$data->product_name}}</h1>
<h1>{{$data->product_description}}</h1>
<h1>{{$data->product_size}}</h1>
<h1>{{$data->product_code}}</h1>
<h1>{{$data->product_price}}</h1>
<h1>{{$data->cat_id}}</h1>
<h1><img src="{{ url('/upload/'.$data->product_image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></h1>

@endsection
