<?php
  
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment ;





use Session;
use Exception;
  
class RazorpayController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function payment($id)
    {        
       if( $userId=Session::get('user')['id']){

       
        $total= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('payment',['total'=>$total]);}
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {

        $input = $request->all();
  
        $api = new Api("PLAESE_PASTE_YOUR_PRIVATE_KEY_HERE", "PASTE_YOUR_SECRET_KEY_HERE");
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
          
        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
   
   
}