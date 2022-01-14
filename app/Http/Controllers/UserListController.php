<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\CusList;

class UserListController extends Controller
{
    public function create()
    {
        return view('customer.list');
    }

    public function store(Request $request)
    {
        $user_list = new CusList;
        $user_list->list_name = $request->input('list_name');
        $user_list->user_id = $request->input('user_id');
        $user_list->list_contacts = $request->input('contacts');
        $user_list->list_createdby = $request->input('created_by');
        $user_list->save();
        return redirect()->back()->with('status','Added Successfully');
    }

    public function list_edit($id)
    {
        $list = CusList::find($id);
        if($list)
        {
            return response()->json([
                'status'=>200,
                'list'=> $list,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No list Found.'
            ]);
        }

    }

    public function list_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $list = CusList::find($id);
            if($list)
            {
                $list->list_name = $request->input('name');
                $list->user_id = $request->input('user_id');
                $list->list_createdby = $request->input('created_by');
                $list->list_contacts = $request->input('contacts');
                $list->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'List Update Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No List Found.'
                ]);
            }

        }
    }




    public function list_delete($id)
    {
        $delete  =  CusList::where('id', $id)->delete(); 
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
