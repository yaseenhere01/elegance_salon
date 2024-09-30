<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\info;
use App\Models\User;
use App\Models\staff;
use App\Models\payment;
use App\Models\Products;
use PDF;
use App\Models\appoinment;

use App\Models\receptionist;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

class AuthorController extends Controller
{
    public function front_scr(){
        return view('author.index');
    }

    public function all_stock_fetch(){
        $stock = Products::all();
        return view('author.all_stock_fetch' , compact('stock'));
    }



    public function upload_stock(Request $request){
        $stock = new Products();
            $pimage = $request->pimage;
            $pimagename = time().'.'.$pimage->getClientOriginalExtension();
            $request->pimage->move('stock-image' , $pimagename);
            $stock->pimage = $pimagename;

            $stock->pname = $request->pname;
            $stock->pitem = $request->pitem;
            $stock->pprice = $request->pprice;
            $stock->save();
            return redirect()->back();
        }

        public function delete_stock($id){
            $stock = Products::find($id)->delete();
            return redirect()->back();
        }

        public function edit_stock($id){
            $stock = Products::find($id);
            return view('admin.edit_stock' , compact('stock'));
        }

        public function update_stock(Request $request , $id){
            $stock = Products::find($id);
            $pimage = $request->pimage;
            $pimagename = time().'.'.$pimage->getClientOriginalExtension();
            $request->pimage->move('stock-image' , $pimagename);
            $stock->pimage = $pimagename;

            $stock->pname = $request->pname;
            $stock->pitem = $request->pitem;
            $stock->pprice = $request->pprice;
            $stock->save();
            return redirect()->back();

        }

        public function all_receptionist_fetch(){
            $recep = receptionist::all();
            return view('author.all_receptionist_fetch' , compact('recep'));
        }

        public function upload_receptionist(Request $request){
            $recep = new receptionist();
                $image = $request->image;
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('stock-image' , $imagename);
                $recep->image = $imagename;

                $recep->name = $request->name;
                $recep->email = $request->email;
                $recep->phone = $request->phone;
                $recep->save();
                return redirect()->back();
            }

            public function delete_receptionist($id){
                $recep = receptionist::find($id)->delete();
                return redirect()->back();
            }

            public function edit_receptionist($id){
                $recep = receptionist::find($id);
                return view('admin.edit_stock' , compact('recep'));
            }

            public function update_receptionist(Request $request , $id){
                $recep = receptionist::find($id);
                $image = $request->image;
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('stock-image' , $imagename);
                $recep->image = $imagename;

                $recep->name = $request->name;
                $recep->email = $request->email;
                $recep->phone = $request->phone;
                $recep->save();
                return redirect()->back();

            }

            public function all_appoinments_fetch_author(){
                $appo = appoinment::all();
                return view('author.all_appoinments_fetch_author' , compact('appo'));
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

                public function add_blog(){
                    return view('author.add_blog');
                }

                public function upload_blog(Request $request){
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

                public function view_payments(){
                    $pay = payment::all();
                    return view('author.view_payment' , compact('pay'));
                }

                public function view_calender(){
                    $staff = staff::all();
                    return view('author.view_calender' , compact('staff'));
                }

                // invoice
                public function print_pdf($id){
                    $pay = payment::find($id);
                    $pdf = PDF::loadView('admin.pdf' , compact('pay'));
                    return $pdf->download('payment_details.pdf');
                }


    }



