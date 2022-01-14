<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table = 'plans';
    
    protected $fillable = ['plan_name', 'description','status','plan_type','actual_price','price','billing_style','discount','credits'];
}
