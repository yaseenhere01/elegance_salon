<?php

namespace App\Http\Controllers;
use App\Models\info;
use App\Models\User;
use App\Models\payment;

use App\Models\Products;
use App\Models\userlist;
use App\Models\appoinment;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppoinmentController;


class UserController extends Controller
{

    public function paymentmethod(){
        return view('user.paymentmethod');
    }



    public function profile(){
        return view('user.profile');
    }

    public function upload_payment(Request $request){
        $pay = new payment();
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('pay-image' , $imagename);
            $pay->image = $imagename;

            $pay->name = $request->name;
            $pay->email = $request->email;
            $pay->phone = $request->phone;
            $pay->address = $request->address;
            $pay->amount = $request->amount;
            $pay->save();
            return redirect()->back();
        }

        public function view_payments(){
            $pay = payment::all();
            return view('admin.view_payments' , compact('pay'));
        }

        public function view_feedback(){
            $data = info::all();
            return view('admin.view_feedback' , compact('data'));
        }

        public function delete_feedback($id){
            $data = info::find($id)->delete();
            return redirect()->back();
        }

    public function feedback(){
        return view('user.feedback');
    }

    public function staffmanagement(){
        return view('user.staffmanagement');
    }

    public function index(){
        return view('user.index');
    }

    public function service(){
        return view('user.service');
    }

    public function specialist(){
        return view('user.specialist');
    }

    public function about(){
        return view('user.about');
    }

    public function treatment(){
        return view('user.treatment');
    }

    public function pricing(){
        return view('user.pricing');
    }

    public function contact(){
        return view('user.contact');
    }

    public function add_appoinments(){
        $appo = appoinment::all();
        return view('user.add_appoinments' , compact('appo'));
    }



    public function upload_appoinments(Request $request){
        $appo = new appoinment();
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('stock-image' , $imagename);
            $appo->image = $imagename;

            $appo->name = $request->name;
            $appo->email = $request->email;
            $appo->phone = $request->phone;
            $appo->address = $request->address;
            $appo->save();
            return redirect()->back();
        }

        public function delete_appoinments($id){
            $appo = appoinment::find($id)->delete();
            return redirect()->back();
        }

        public function edit_appoinments($id){
            $appo = appoinment::find($id);
            return view('user.edit_appoinments' , compact('appo'));
        }

        public function update_appoinments(Request $request , $id){
            $appo = appoinment::find($id);
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('stock-image' , $imagename);
            $appo->image = $imagename;

            $appo->name = $request->name;
            $appo->email = $request->email;
            $appo->phone = $request->phone;
            $appo->address = $request->address;
            $appo->save();
            return redirect()->back();

        }




}
