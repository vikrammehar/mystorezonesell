<?php
use App\Http\controllers\usercontroller;
use Illuminate\Support\Facades\Route;
use App\http\controllers\Productcontroller;
use App\http\controllers\Razorpaycontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
Route:: view("/login","login");
Route:: view("/signup","signup");
Route::post("/login",[usercontroller::class,"login"]);
Route::post("/signup",[usercontroller::class,"signup"]);  
Route::get("/" ,[Productcontroller::class,"index"]);
Route::get("detail/{id}" ,[Productcontroller::class,"detail"]);
Route::get("search" ,[Productcontroller::class,"search"]);
Route::post("add_to_cart" ,[Productcontroller::class,"addtocart"]);
Route::get("cartlist" ,[Productcontroller::class,"cartlist"]);
Route::get("removecart/{id}" ,[Productcontroller::class,"removecart"]);
Route::get("ordernow" ,[Productcontroller::class,"orderNow"]);
Route::post("orderplace" ,[Productcontroller::class,"orderplace"]);
Route::get("myorder" ,[Productcontroller::class,"myOrder"]);

Route::get('payment/{id}',[RazorpayController::class,'payment']);
Route::post('payment',[RazorpayController::class,'store'])->name('razorpay.payment.store');  
