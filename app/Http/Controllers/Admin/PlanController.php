<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;

class PlanController extends Controller
{
       
    public function add_plan(){
        $view =  view('admin.plan.add-plan');
        return $view;
    }
    
    
    //Plan Store  
    public function planstore(Request $request)
    {
        //validation rule
        $validated = request()->validate([ 
            'plane_name' => 'required',
            'description' =>'required',
            'plan_type'    => 'required',
            'actual_price' =>  'required',
            'price'       =>  'required',
            'billing_style' => 'required',
            'plane_credit' =>  'required',
        ]);

        $create_pan = Plan::create([
                    'plan_name'    =>  $request->plane_name,
                    'description' =>  $request->description,
                    'status'      =>  $request->status,
                    'plan_type'    =>  $request->plan_type,
                    'actual_price' => $request->actual_price,
                    'price'       =>  $request->price,
                    'billing_style' =>  $request->billing_style,
                    'discount' =>  $request->plane_discount,
                    'credits' =>  $request->plane_credit,
                ]);
        //check if plan is create
        if($create_pan){
            return redirect()->back()->with('success','Plan added successfully.');
        } else {
            return redirect()->back()->with('unsuccess','Oops something wrong!');
        }
            
    }

    //View Plan list  
    public function view_plan(){
        $plans = Plan::get(); 
        return view('admin.plan.all-plan',compact('plans'));
    }

    //Delete Plan list  
    public function plan_destroy($id){
    	$plan_id = $id;
        $IsPlanDelete = Plan::Where("id",$plan_id)->Delete();
         //check if plan is deleted or not
         if($IsPlanDelete) {
         	return redirect()->back()->with('success','Plan deleted successfully.');
         }else{
         	return redirect()->back()->with('success','Plan deleted successfully.');
         }
    }

    //Plan Edit 
    public function edit_plan(plan $id)
    {
        return view('admin.plan.edit_plan',compact('id'));
    }

    //Plan Update
    public function update_plan(Request $request, $id)
    {   
         $update_plan = Plan::where('id', $id)
                ->update([
                    'plan_name'    =>  $request->plane_name,
                    'description' =>  $request->description,
                    'status'      =>  $request->status,
                    'plan_type'    =>  $request->plan_type,
                    'actual_price' => $request->actual_price,
                    'price'       =>  $request->price,
                    'billing_style' =>  $request->billing_style,
                    'discount' =>  $request->plane_discount,
                    'credits' =>  $request->plane_credit,
                ]);
        if($update_plan){
           return back()->with('success','Plan Added Updated Successfully'); 
        } else {
             return back()->with('unsuccess','Opps Something wrong!');
        }
    }
}
