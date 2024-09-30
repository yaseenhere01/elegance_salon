<?php

namespace App\Http\Controllers;
use App\Models\info;
use App\Models\User;
use App\Models\userlist;
use App\Models\Products;
use App\Models\receptionist;
use App\Models\blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function insert(Request $request){
        $data = new info();
        $data->time = $request->time;
        $data->visit = $request->visit;
        $data->appointment = $request->appointment;
        $data->experience = $request->experience;
        $data->quality = $request->quality;
        $data->checked = $request->checked;
        $data->comfort = $request->comfort;
        $data->friendliness = $request->friendliness;
        $data->price = $request->price;
        $data->overall = $request->overall;
        $data->likely = $request->likely;
        $data->comments = $request->comments;
        $data->discuss = $request->discuss;
        $data->email = $request->email;
        $data->save();
        return redirect()->back();

    }

    public function all_user_fetch(){
        return view('admin.all_user_fetch');
    }

    public function add_blog_admin(){
        return view('admin.add_blog_admin');
    }

    public function upload_blog_admin(Request $request){
        $blog = new blog();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('blogimg',$imagename);
        $blog->image = $imagename;

        $blog->blogtitle = $request->blogtitle;
        $blog->blogname = $request->blogname;
        $blog->blogdescription = $request->blogdescription;
        $blog->author = $request->author;
        $blog->save();
        return redirect()->back();

    }

    public function all_blog_admin(){
        $blog = blog::all();
        return view('admin.all_blog_admin' , compact('blog'));
    }

    public function upload_blog_fetch_admin(Request $request){
        $blog = new blog();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('blogimg',$imagename);
        $blog->image = $imagename;

        $blog->blogtitle = $request->blogtitle;
        $blog->blogname = $request->blogname;
        $blog->blogdescription = $request->blogdescription;
        $blog->author = $request->author;
        $blog->save();
        return redirect()->back();
        }

        public function delete_blog_fetch_admin($id){
            $blog = blog::find($id)->delete();
            return redirect()->back();
        }

        public function edit_blog_fetch_admin($id){
            $blog = blog::find($id);
            return view('admin.edit_blog_fetch_admin' , compact('blog'));
        }

        public function update_blog_fetch_admin(Request $request , $id){
            $blog = blog::find($id);
            $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('blogimg',$imagename);
        $blog->image = $imagename;

        $blog->blogtitle = $request->blogtitle;
        $blog->blogname = $request->blogname;
        $blog->blogdescription = $request->blogdescription;
        $blog->author = $request->author;
        $blog->save();
        return redirect()->back();

        }

        public function add_api(){
            return view('admin.api_record_add');
        }

        public function fetch_api(){
            return view('admin.api_record_fetch');
        }

        

        // auth code start
    public function all_auth(){
        $data = User::all();
        return view('admin.view_auth' , compact('data'));
    }
    public function authdelete($authid){
        $data = User::find($authid)->delete();
        return redirect()->back()->with('authmessagedelete' , 'auth data deleted successfully');
    }
    // auth code end

}
