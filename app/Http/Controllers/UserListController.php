<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlist;
use App\Models\User;
use App\Http\Controllers\UserController;

class UserListController extends Controller
{
    public function all_user_fetch(){
        $us = userlist::all();
        return view('admin.all_user_fetch' , compact('us'));
    }

  

    public function upload_user(Request $request){
        $us = new userlist();
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('stock-image' , $imagename);
            $us->image = $imagename;

            $us->name = $request->name;
            $us->email = $request->email;
            $us->phone = $request->phone;
            $us->address = $request->address;
            $us->usertype = $request->usertype;
            $us->save();
            return redirect()->back();
        }

        public function delete_user($id){
            $us = userlist::find($id)->delete();
            return redirect()->back();
        }

        public function edit_user($id){
            $us = userlist::find($id);
            return view('user.edit_user' , compact('us'));
        }

        public function update_user(Request $request , $id){
            $us = userlist::find($id);
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('stock-image' , $imagename);
            $us->image = $imagename;

            $us->name = $request->name;
            $us->email = $request->email;
            $us->phone = $request->phone;
            $us->address = $request->address;
            $us->usertype = $request->usertype;
            $us->save();
            return redirect()->back();
            
        }
}
