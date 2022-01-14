<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    //function for admin dashboartd
    public function add_api(){
        $view =  view('admin.api.add-api');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_api(){
        $view =  view('admin.api.all-api');
        return $view;
    }  
     //function for admin dashboartd
    public function add_integrations(){
        $view =  view('admin.integrations.add-integrations');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_integrations(){
        $view =  view('admin.integrations.all-integrations');
        return $view;
    }
        
      //function for admin dashboartd
    public function all_prospecting(){
        $view =  view('admin.prospecting.all-prospecting');
        return $view;
    }
    
}


