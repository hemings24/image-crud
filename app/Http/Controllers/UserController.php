<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
   public function index()
   {
      $user = User::all();

      return view('users.index', compact('user'));
   }

   public function create()
   {
      return view('users.create');
   }

   public function store(Request $request)
   {
      $user = new User;

      $user->name = $request->input('name');
      $user->email = $request->input('email');

      if($request->hasfile('profile_image'))
      {
         $file = $request->file('profile_image');
         $extension = $file->getClientOriginalExtension();
 
         $filename = time().'.'.$extension;
         $file->move('assets/img/', $filename);

         $user->profile_image = $filename;
      }

      $user->save();
      return redirect()->back()->with('status','User Image Added');
   }

   public function edit($id)
   {
      $user = User::find($id);

      return view('users.edit', compact('user'));
   }

   public function update(Request $request, $id)
   {
      $user = User::find($id);

      $user->name = $request->input('name');
      $user->email = $request->input('email');

      if($request->hasfile('profile_image'))
      {
         $destination = 'assets/img/'.$user->profile_image;
         if(file::exists($destination))
         {
            File::delete($destination);
         }

         $file = $request->file('profile_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('assets/img/', $filename);
         $user->profile_image = $filename;
      }

      $user->update();
      return redirect()->back()->with('status','User Image Updated');
   }

   public function destroy($id)
   {
      $user = User::find($id);

      $destination = 'assets/img/'.$user->profile_image;
      if(File::exists($destination))
      {
         File::delete($destination);
      }

      $user->delete();
      return redirect()->back()->with('status','User Image Deleted');
   }
}