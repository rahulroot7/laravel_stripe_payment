<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProspectingList extends Model
{
    use HasFactory;
    protected $table = 'prospecting_lists';
    
    protected $fillable = ['list_id', 'user_id','name','data','title','company','departments','seniority'];
}
