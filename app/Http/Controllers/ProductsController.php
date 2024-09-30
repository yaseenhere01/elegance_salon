<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\info;
use App\Models\User;
use App\Models\blog;
use App\Models\receptionist;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AdminController;

class ProductsController extends Controller
{
    public function add_stock(){
        return view('admin.add_stock');
    }

    // public function logout(){
    //     return redirect('/login');
    // }

    public function all_stock(){
        $stock = Products::all();
        return view('admin.all_stock' , compact('stock'));
    }

    public function view_stock(){
        $stock = Products::all();
        return view('userdashboard.view_stock' , compact('stock'));
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


        public function add_receptionist(){
            return view('admin.add_receptionist');
        }
    
        public function all_receptionist(){
            $recep = receptionist::all();
            return view('admin.all_receptionist' , compact('recep'));
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
                return view('admin.edit_receptionist' , compact('recep'));
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
    
    }


