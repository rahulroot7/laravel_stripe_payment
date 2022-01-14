<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserPlan;
use App\Models\User;
use App\Models\Order;
use App\Models\Plan;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalPaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
    	$user_id = Auth::id();
    	$amount = $request->input('amount');
    	$plan_id = $request->input('plan_id');
        $plan_name = $request->input('plan_name');
        $credit = $request->input('credit');
         
        $data = [];
		$data['items'] = [
		    [
		        'name' => $plan_id,
		        'price' => $amount,
		        'desc'  => $credit,
		        'qty' => 1
		    ]

		];
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Bill";
        $data['return_url'] = route('success.payment');
        $data['cancel_url'] = route('cancel.payment');
        $data['total'] = $amount;

        // print_r($data);die;
  
        $paypalModule = new ExpressCheckout;
  
        $res = $paypalModule->setExpressCheckout($data);
        $res = $paypalModule->setExpressCheckout($data, true);
  		// return response()->json($res);
        return redirect($res['paypal_link']);
    }
   
    public function paymentCancel()
    {
        return redirect('/dashboard')->with('unsuccess','Payment cancel successfull.');
    }
  
    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
 		// print_r($response);die;
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
        	$user_id = Auth::id();
           	$transationId = $response['CORRELATIONID'];
           	$email = $response['EMAIL'];
           	$plan_id = $response['L_NAME0'];
           	$plan_name = $response['L_NAME0'];
           	$credit = $response['L_DESC0'];
           	$country = $response['COUNTRYCODE'];
           	$billing_name = $response['FIRSTNAME'];
           	$amount = $response['AMT'];
           	// user plan update 
	       $update = UserPlan::where('user_id', $user_id)
                			 ->update([
			                    'plan_id' => $plan_id,
			                    'credits' => $credit,
			                ]);
            // order create
            $order = Order::create([
		                    'transactionId'    =>  $transationId,
		                    'amount' =>  $amount,
		                    'user_id'      =>  $user_id,
		                    'plan_id'    =>  $plan_id,
		                    'billing_name' => $billing_name,
		                    'billing_email'       =>  $email,
		                    'billing_address' =>  '',
		                    'billing_city' =>  '',
		                    'billing_zipcode' =>  '',
		                    'billing_country' =>  $country,
		                ]);
            if($order){
            		return redirect('/dashboard')->with('success','Plan Added Successfully');
		            } else {
		            	return redirect('/dashboard')->with('unsuccess','Opps something wrong.');
		            }
        }else{
        	return redirect('/dashboard')->with('unsuccess','Opps something wrong.');
        }
    }
}