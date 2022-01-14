<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserPlan;
use App\Models\User;
use App\Models\Plan;
use App\Models\CusList;
use Mail;
use App\Mail\account_reset_password;
class CustomerController extends Controller
{
	public function dashboard()
    {
        $user_id = Auth::id();
        $plans = UserPlan::Where("user_id", $user_id)->get();
        return view('customer.dashboard',compact('plans'));
    }

    public function prospecting()
    {
        $user_id = Auth::id();
        $user_list = CusList::Where("user_id", $user_id)->get();
        $plans = UserPlan::Where("user_id", $user_id)->get();
        return view('customer.prospecting',compact('user_list','plans'));
    }
    public function list()
    {
        $user_id = Auth::id();
        $list_data = CusList::Where("user_id", $user_id)->get();
        return view('customer.list',compact('list_data'));
    }
    public function team()
    {
        $user_id = Auth::id();
        $team = User::Where("id", $user_id)->get();
        $team_plan = UserPlan::Where("user_id", $user_id)->get();
        return view('customer.team',compact('team','team_plan'));
    }
    public function plans()
    {
        $plan = Plan::get();
        return view('customer.plans.all-plan-list',compact('plan'));
    }
    public function integrations()
    {
        return view('customer.integrations');
    }
    public function api()
    {
        return view('customer.api');
    }
    public function free_credits()
    {
        return view('customer.get-free-credits');
    }
    public function lab()
    {
        return view('customer.labs');
    }
    public function account()
    {   
        $user_id = Auth::id();
        $myaccount = User::Where("id", $user_id)->get();
        $myuser_plane = UserPlan::Where("user_id", $user_id)->get();
        foreach ($myuser_plane as $key => $value) {
           $plan_id = $value->plan_id;
           $currentuser_plane = Plan::Where("id", $plan_id)->get();
        }
        return view('customer.account',compact('myaccount','currentuser_plane'));
    }

    public function account_update(Request $request, $id)
    {
        $update = User::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
        return redirect()->back()->with('status','Account Updated Successfully');
    }

    public function account_reset_password(Request $request, $id)
    {
        function rand_string( $length ) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($chars),0,$length);
        }
        $user = User::find($id);
        $password = rand_string(8);
           $data = [
                    'password' => $password,
            ];
            $send = mail::to("rahultestcare@gmail.com")->send(new account_reset_password($data));
     
          if ($send) {
               return redirect()->back()->with('status','Sorry! Please try again latter');
          }else{
                $user->password = Hash::make($password);
                $user->update();
                return redirect()->back()->with('status','Successfully password send in your mail');
             }  
    }


    public function support()
    {
        return view('customer.support');
    }
    public function join_community()
    {
        return view('customer.join-community');
    }
}
