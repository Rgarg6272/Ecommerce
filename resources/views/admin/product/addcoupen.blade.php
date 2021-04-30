@extends('../admin')
@section('page_title','Add Coupen')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
           
            <div class="col-md-8">
             
               @if(session('message'))
               <p class ="alert alert-success">
                  {{session('message')}}
               </p>
               @endif
               <br>
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Add Coupen</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form method="POST" action="{{url('coupen/save')}}">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Coupen Code</label>
                           <input type="text" name="coupen_code" class="form-control" id="exampleInputEmail1" placeholder="Coupen Code">
                           @error('coupen_code')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Amount</label>
                           <input type="text" name="amount" class="form-control" id="exampleInputEmail1" placeholder="Amount">
                           @error('amount')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                         <div class="form-group">
                         <label for="exampleInputEmail1">Amount Type</label>
                           <select class="form-control" name="amount_type" aria-label="Default select example">
                           <option selected>Open this select menu</option>
                           <option value="Percentage">Percentage</option>
                           <option value="Fixed">Fixed</option>
                           </select>
                           @error('amount_type')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Expiry Date</label>
                           <input type="Date" name="expiry_date" class="form-control" id="exampleInputEmail1" placeholder="Expiry-Date">
                         
                           @error('expiry_date')
                           <span class="alert alert-danger">
                           {{$message}}
                           </span>
                           @enderror
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                  </form>
                  </div>
                  </form>
               </div>
            </div>
           
         </div>
      </div>
   </section>
</div>
<!-- /.card -->
@endsection