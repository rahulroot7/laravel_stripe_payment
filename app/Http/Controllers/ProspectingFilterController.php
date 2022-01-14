<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\CusList;
use App\Models\UserPlan;
use App\Models\ProspectingList;
class ProspectingFilterController extends Controller
{
   public function prospecting_filter($id)
    { 
        if($id == 'amazon' || $id == 'walmart') {

        ?>
        <script>
            $(document).ready(function() {
   
              var table = $('#example2').DataTable({ 
                    select: false,
                    "columnDefs": [{
                        className: "Name", 
                        "targets":[0],
                        "visible": false,
                        "searchable":false
                    }]
                });//End of create main table
            });
        </script>
       <table id="example2" class="display pt-4 mb-4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> </th>
                <th> </th>
                <th>Name</th>
                <th>Contacts</th>
                <th>company</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>

          <tr>
                <td> </td>
                <td><input type="checkbox" class="filter_prospecting" name="check_detail"></td>
                <td>
                    Clive Rees
                    Chief Procurement Officer Americas and Emeia</td>
                <td><p>Work: @uk.fujitsu.com</p>
                    <p>Work: @uk.fujitsu.com</p>
                    <p>Phone: +44 786</p>
                    <p>Phone: +44 786</p>
                </td>
                <td>
                    Fujitsu
                    company-logo
                    Fujitsu
                    www.fujitsu.com
                    About
                    Fujitsu is the leading Japanese global information and
                </td>
                <td> <button class="btn app-btn-primary float-end" data-bs-toggle="modal" data-bs-target="#filtersaveModal">Show Details</button> </td>
            
              </tr>
              <tr>
                <td> </td>
                <td><input type="checkbox" class="filter_prospecting" name="check_detail"></td>
                <td>
                    Clive Rees
                    Chief Procurement Officer Americas and Emeia</td>
                <td>
                    <p>Work: @uk.fujitsu.com</p>
                    <p>Work:  @fujitsu.com</p>
                    <p>Phone: +44 786</p>
                    <p>Phone: +44 796</p>
                </td>
                <td>
                    Fujitsu
                    company-logo
                    Fujitsu
                    www.fujitsu.com
                    About
                    Fujitsu is the leading Japanese global information and
                </td>
                <td> <button class="btn app-btn-primary float-end" data-bs-toggle="modal" data-bs-target="#filtersaveModal">Show Details</button> </td>
              </tr>              
            </tbody>
        </table>
        <?php
        }else{?>
            <h1>No Result Found !</h1> 
       <?php }
    }


    // prospecting insert data
    public function add_prospecting(Request $request)
    {
        $user_credit = $request->credit;
        $user_contact = $request->list_contact;

        $create_prospecting = ProspectingList::create([
                    'list_id'    =>  $request->list_id,
                    'user_id' =>  $request->user_id,
                    'name'      =>  $request->name,
                    'data'    =>  $request->data,
                    'title'       =>  $request->title,
                    'company' =>  $request->company,
                    'departments' =>  $request->department,
                    'seniority' =>  $request->seniority,
                ]);
        //check if plan is create
        if($create_prospecting){
            $user_id = Auth::id();
            $update_plan = UserPlan::where('user_id', $user_id)
                ->update([
                    'used_credits'    =>  $user_credit,
                ]); 
            $updat_contact = CusList::where('user_id', $user_id)
                ->update([
                    'list_contacts'    =>  $user_contact,
                ]);
        }

        return redirect()->back()->with('status','Save detail your list Successfully');

    }

    public function prospecting_list($id){
         $prospect_list = ProspectingList::where('list_id', $id)->get();
        return view('customer.prospecting_list',compact('prospect_list'));
    }
}
