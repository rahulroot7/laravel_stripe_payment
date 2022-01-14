<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPlan;
use App\Models\User;

class TeamController extends Controller
{
        
    //function for admin dashboartd
    public function add_team(){
        $view =  view('admin.team.add-team');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_team(){
    	$all_team = User::get();
    	$use_credits = UserPlan::get();
        $view =  view('admin.team.all-team',compact('all_team','use_credits'));
        return $view;
    }
    
     //function for admin dashboartd
    public function manage_team(){
        $view =  view('admin.team.manage-team');
        return $view;
    }
}
