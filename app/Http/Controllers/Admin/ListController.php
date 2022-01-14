<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CusList;
class ListController extends Controller
{
     //function for admin dashboartd
    public function add_list(){
        $view =  view('admin.list.add-list');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_list(){
    	$all_list = CusList::get();
        $view =  view('admin.list.all-list',compact('all_list'));
        return $view;
    }
    
      //function for admin dashboartd
    public function manage_list(){
        $view =  view('admin.list.manage-list');
        return $view;
    } 
}
