@extends('admin')
@section('title','View Data')


@section('content')

<h1>{{$data->id}}</h1>
<h1>{{$data->name}}</h1>
<h1>{{$data->description}}</h1>
<h1><img src="{{ url('/upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></h1>

@endsection
