@extends('layouts.main')
@section('title', 'Image CRUD | Add User')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
         @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
         @endif
         <div class="card">

            <div class="card-header">
               <h4>
                  Add User with IMAGE
                  <a href="{{route('users')}}" class="btn btn-danger float-end">Back</a>
               </h4>
            </div>

            <div class="card-body">
               <form action="{{route('add-user')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group mb-3">
                     <label for="">User Name</label>
                     <input name="name" type="text" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                     <label for="">User Email</label>
                     <input name="email" type="text" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                     <label for="">User Profile Image</label>
                     <input name="profile_image" type="file" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                     <button type="submit" class="btn btn-primary">Save User</button>
                  </div>

               </form>
            </div>

         </div>
      </div>
   </div>
</div>
@endsection