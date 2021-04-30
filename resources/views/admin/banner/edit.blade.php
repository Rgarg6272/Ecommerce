@extends('admin')
@section('title','Edit Banner')


@section('content')
<form method="post" action="{{url('banner/update')}}" enctype="multipart/form-data">
  @if(session('message'))

  <p class ="alert alert-success">
      {{session('message')}}
  </p>
  @endif
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Url</label>
    <input type="text" name="url" value="{{$data->url}}" class="form-control" id="exampleInputPassword1">
  </div>
    <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <br>
                            <img src="{{ url('/upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="image" value="{{$data->image}}" class="custom-file-input"   >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
   
@endsection