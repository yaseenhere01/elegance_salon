<?php

use App\Models\blog;
use App\Models\info;
use App\Models\User;
use App\Models\staff;
use App\Models\contact;
use App\Models\Products;
use App\Models\userlist;
use App\Models\appoinment;
use App\Models\myappoinment;
use App\Models\receptionist;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\StylistController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\HairStylistController;
use App\Http\Controllers\MakeupArtistController;
use App\Http\Controllers\MyAppoinmentController;

Route::get('/', function () {
    $appo = appoinment::all();
    $stock = Products::all();
    $staff = staff::all();
    $blog = blog::all();
    $data = info::all();
    $us = userlist::all();
    return view('user.index' , compact('stock' , 'blog' , 'appo' ,'staff' , 'data' , 'us'));
});

Route::get('/feedback' , function(){
    return view('feedback');
});


Route::get('/service' , function(){
    $stock = Products::all();
    return view('user.service' , compact('stock'));
});

Route::get('/specialist' , function(){
    $staff = staff::all();
    return view('user.specialist' , compact('staff'));
});

Route::get('/profile' , function(){
    return view('user.profile');
});

Route::get('/userdashboard.user_dashboard' , function(){
    return view('userdashboard.user_dashboard');
});

Route::get('/index' , function(){
    return view('user.index');
});

// Invoice
Route::get('/print_pdf/{id}' , [AuthorController::class , 'print_pdf']);



// Route::get('/paymentmethod' , function(){
//     return view('user.paymentmethod');
// });

// Admin Controller Routes
Route::post('/insert' , [AdminController::class , 'insert']);
Route::get('/api_record_add' , [AdminController::class , 'add_api']);
Route::get('/api_record_fetch' , [AdminController::class , 'fetch_api']);
Route::get('/all_blog_admin' , [AdminController::class , 'all_blog_admin']);
Route::get('/upload_blog_fetch_admin' , [AdminController::class , 'upload_blog_fetch_admin']);
Route::get('/delete_blog_fetch_admin/{id}' , [AdminController::class , 'delete_blog_fetch_admin']);
Route::get('/edit_blog_fetch_admin/{id}' , [AdminController::class , 'edit_blog_fetch_admin']);
Route::post('/update_blog_fetch_admin/{id}' , [AdminController::class , 'update_blog_fetch_admin']);

// Products Controller Routes
Route::get('/add_stock' , [ProductsController::class , 'add_stock']);
Route::get('/all_stock' , [ProductsController::class , 'all_stock']);
Route::post('/upload_stock' , [ProductsController::class , 'upload_stock']);
Route::get('/delete_stock/{id}' , [ProductsController::class , 'delete_stock']);
Route::get('/edit_stock/{id}' , [ProductsController::class , 'edit_stock']);
Route::post('/update_stock/{id}' , [ProductsController::class , 'update_stock']);
Route::get('/add_blog_admin' , [AdminController::class , 'add_blog_admin']);
Route::post('/upload_blog_admin' , [AdminController::class , 'upload_blog_admin']);

Route::get('/add_receptionist' , [ProductsController::class , 'add_receptionist']);
Route::get('/all_receptionist' , [ProductsController::class , 'all_receptionist']);
Route::post('/upload_receptionist' , [ProductsController::class , 'upload_receptionist']);
Route::get('/delete_receptionist/{id}' , [ProductsController::class , 'delete_receptionist']);
Route::get('/edit_receptionist/{id}' , [ProductsController::class , 'edit_receptionist']);
Route::post('/update_receptionist/{id}' , [ProductsController::class , 'update_receptionist']);


// Author Controller Routes
Route::get('/front_scr' , [AuthorController::class , 'front_scr']);
Route::get('/all_stock_fetch' , [AuthorController::class , 'all_stock_fetch']);
Route::post('/upload_stock' , [AuthorController::class , 'upload_stock']);
Route::get('/delete_stock/{id}' , [AuthorController::class , 'delete_stock']);
Route::get('/edit_stock/{id}' , [AuthorController::class , 'edit_stock']);
Route::post('/update_stock/{id}' , [AuthorController::class , 'update_stock']);
Route::get('/add_blog' , [AuthorController::class , 'add_blog']);
Route::post('/upload_blog' , [AuthorController::class , 'upload_blog']);

Route::get('/all_receptionist_fetch' , [AuthorController::class , 'all_receptionist_fetch']);
Route::post('/upload_receptionist' , [AuthorController::class , 'upload_receptionist']);
Route::get('/delete_receptionist/{id}' , [AuthorController::class , 'delete_receptionist']);
Route::get('/edit_receptionist/{id}' , [AuthorController::class , 'edit_receptionist']);
Route::post('/update_receptionist/{id}' , [AuthorController::class , 'update_receptionist']);

Route::get('/all_appoinments_fetch_author' , [AuthorController::class , 'all_appoinments_fetch_author']);
Route::post('/upload_appoinments' , [AuthorController::class , 'upload_appoinments']);
Route::get('/delete_appoinments/{id}' , [AuthorController::class , 'delete_appoinments']);
Route::get('/edit_appoinments/{id}' , [AuthorController::class , 'edit_appoinments']);
Route::post('/update_appoinments/{id}' , [AuthorController::class , 'update_appoinments']);

// User Controller Routes
// Route::get('/logout' , [UserController::class , 'logout']);
Route::get('/staffmanagement' , [UserController::class , 'staffmanagement']);
Route::get('/index' , [UserController::class , 'index']);
Route::get('/feedback' , [UserController::class , 'feedback']);
// Route::get('/service' , [UserController::class , 'service']);
// Route::get('/specialist' , [UserController::class , 'specialist']);
Route::get('/about' , [UserController::class , 'about']);
Route::get('/treatment' , [UserController::class , 'treatment']);
Route::get('/pricing' , [UserController::class , 'pricing']);
Route::get('/contact' , [UserController::class , 'contact']);

Route::get('/paymentmethod' , [UserController::class , 'paymentmethod']);
Route::post('/upload_payment' , [UserController::class , 'upload_payment']);
Route::get('/view_payments' , [UserController::class , 'view_payments']);

Route::get('/view_feedback' , [UserController::class , 'view_feedback']);
Route::get('/delete_feedback/{id}' , [UserController::class , 'delete_feedback']);


Route::get('/view_payment' , [AuthorController::class , 'view_payments']);
Route::get('/view_calender' , [AuthorController::class , 'view_calender']);

Route::get('/view_contact' , [ContactController::class , 'view_contact']);
Route::get('/delete_contact/{id}' , [ContactController::class , 'delete_contact']);

// Stylist
Route::get('/stylists', [StylistController::class, 'index'])->name('stylists.index');  // For viewing stylists
Route::post('/stylists', [StylistController::class, 'store'])->name('stylists.store'); // For adding a stylist
Route::get('/delete_appo/{id}' , [StylistController::class , 'delete_appo']);



Route::get('/hair-stylists', [HairStylistController::class, 'index'])->name('hair-stylists.index');
Route::post('/hair-stylists', [HairStylistController::class, 'store'])->name('hair-stylists.store');
Route::get('/delete_hair/{id}' , [HairStylistController::class , 'delete_hair']);

Route::resource('makeup-artists', MakeupArtistController::class);


// If you have additional routes for booking and cancellation, add them here as well
Route::post('/makeup-artists/book-appointment', [MakeupArtistController::class, 'bookAppointment']);
Route::post('/makeup-artists/cancel-appointment', [MakeupArtistController::class, 'cancelAppointment']);
Route::get('/delete_artist/{id}' , [MakeupArtistController::class , 'delete_artist']);










Route::get('/add_appoinments' , [UserController::class , 'add_appoinments']);
Route::post('/upload_appoinments' , [UserController::class , 'upload_appoinments']);
Route::get('/delete_appoinments/{id}' , [UserController::class , 'delete_appoinments']);
Route::get('/edit_appoinments/{id}' , [UserController::class , 'edit_appoinments']);
Route::post('/update_appoinments/{id}' , [UserController::class , 'update_appoinments']);

Route::get('/all_appoinments_fetch' , [AppoinmentController::class , 'all_appoinments_fetch']);
Route::post('/upload_appoinments' , [AppoinmentController::class , 'upload_appoinments']);
Route::get('/delete_appoinments/{id}' , [AppoinmentController::class , 'delete_appoinments']);
Route::get('/edit_appoinments/{id}' , [AppoinmentController::class , 'edit_appoinments']);
Route::post('/update_appoinments/{id}' , [AppoinmentController::class , 'update_appoinments']);

// Appoinment Route
Route::get('/req_app/{id}' , [AppoinmentController::class , 'req_app']);
Route::get('/req_can/{id}' , [AppoinmentController::class , 'req_can']);
Route::get('/app_delete/{id}' , [AppoinmentController::class , 'app_delete']);
Route::get('/cancel_req/{id}' , [AppoinmentController::class , 'cancel_req']);

// MyAppoinmentController Route
Route::get('/myappoinment' , [MyAppoinmentController::class , 'myappoinment']);
Route::get('/app_delete/{id}' , [MyAppoinmentController::class , 'app_delete']);


// StaffController Route
Route::get('/add_staff_admin' , [StaffController::class , 'add_staff_admin']);
Route::post('/upload_staff_admin' , [StaffController::class , 'upload_staff_admin']);
Route::get('/all_staff_admin' , [StaffController::class , 'all_staff_admin']);
Route::post('/upload_staff_admin' , [StaffController::class , 'upload_staff_admin']);
Route::get('/delete_staff_fetch_admin/{id}' , [StaffController::class , 'delete_staff_fetch_admin']);
Route::get('/edit_staff_fetch_admin/{id}' , [StaffController::class , 'edit_staff_fetch_admin']);
Route::post('/update_staff/{id}' , [StaffController::class , 'update_staff']);
// UserDashboard
Route::get('/view_staff' , [StaffController::class , 'view_staff']);



// ContactController Route
Route::get('/contact' , [ContactController::class , 'contact']);
Route::post('/upload_contact' , [ContactController::class , 'upload_contact']);

//Auth
Route::get('/view_auth',[admincontroller::class,('all_auth')]);
Route::get('/auth_delete/{authid}' , [admincontroller::class , 'authdelete']);


// Invoice
Route::get('/invoice' , [invoiceController::class , 'generateinvoice']);
Route::get('/receipts' , function(){
    return view('user.receipts');
});
Route::get('/invoice' , function(){
    return view('user.invoice');
});


// UserDashboard
Route::get('/userdashboard/view_stock' , [ProductsController::class , 'view_stock']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
       if(Auth::id())
       {

        if(Auth::user()->usertype == "0"){
            $appo = appoinment::all();
            $stock = Products::all();
            $staff = staff::all();
            $blog = blog::all();
            $data = info::all();
            $us = userlist::all();
            return view('user.index' , compact('stock' , 'blog' , 'staff' , 'data' , 'us'));
        }
        elseif(Auth::user()->usertype == "2"){
            return view('author.index');
        }
        else{
         return view('admin.index');
        }
       }else{
        return redirect()->back();
       }
    })->name('dashboard');
});
