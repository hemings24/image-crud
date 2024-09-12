@extends('layouts.main')
@section('title', 'Image CRUD | All Users')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h4>
                  Laravel 8 IMAGE CRUD
                  <a href="{{route('add-user')}}" class="btn btn-primary float-end">Add User</a>
               </h4>
            </div>
            <div class="card-body">
               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th></th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($user as $item)
                     <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                           <img src="{{asset('assets/img/'.$item->profile_image)}}" width="100px" height="70px" alt="Image">
                        </td>
                        <td>
                           <a href="{{route('edit-user',$item)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                           <form action="{{route('delete-user',$item)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection