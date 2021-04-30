@extends('admin')
@section('title','Add Category')


@section('content')
<form method="post" action="{{url('category/save')}}" enctype="multipart/form-data">
  @if(session('message'))

  <p class ="alert alert-success">
      {{session('message')}}
  </p>
  @endif
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     @error('name')
    <span class="alert alert-success">
      {{$message}}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
     @error('description')
    <span class="alert alert-success">
      {{$message}}
    </span>
    @enderror
  </div>
    <div class="form-group">
                           <label for="exampleInputFile">Image</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" name="image" class="custom-file-input">
                                 
                                 <label class="custom-file-label">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                        </div>
 <!--  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
   @error('image')
                                  <span class="alert alert-success">
                                  {{$message}}
                                  </span>
                                  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
@endsection