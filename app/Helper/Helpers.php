<?php
  namespace App\Helper;
  use App\Models\UserPlan;
  use Illuminate\Support\Facades\Auth;
  class Helpers
  {
    #Get Category Data From Category Model
    static function get_user_plan()
    {
        $user_id = Auth::id();
        $plandata = UserPlan::Where("user_id", $user_id)->get();
        return $plandata;
    }
  }

  ?>