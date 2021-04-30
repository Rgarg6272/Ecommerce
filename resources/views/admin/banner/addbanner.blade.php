@extends('admin')
@section('title','Add Banner')


@section('content')
<form method="post" action="{{url('banner/saved')}}" enctype="multipart/form-data">
  @if(session('message'))

  <p class ="alert alert-success">
      {{session('message')}}
  </p>
  @endif
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('title')
    <span class="alert alert-success">
      {{$message}}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Url</label>
    <input type="url" name="url" class="form-control" id="exampleInputPassword1">
     @error('url')
    <span class="alert alert-success">
      {{$message}}
    </span>
    @enderror
  </div>
    <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="image" class="custom-file-input"   >
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                                 
                              </div>
                           </div>
                        </div>
                         @error('image')
                                  <span class="alert alert-success">
                                  {{$message}}
                                  </span>
                                  @enderror
 <!--  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
@endsection