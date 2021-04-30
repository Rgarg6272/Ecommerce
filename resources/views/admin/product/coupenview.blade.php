@extends('admin')
@section('title','View Data')


@section('content')

<h1>{{$data->id}}</h1>
<h1>{{$data->coupen_code}}</h1>
<h1>{{$data->amount}}</h1>
<h1>{{$data->amount_type}}</h1>
<h1>{{$data->expiry_date}}</h1>



@endsection
