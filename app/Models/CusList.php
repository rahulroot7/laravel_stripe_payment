<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CusList extends Model
{
    use HasFactory;
    protected $table = 'lists';
    
    protected $fillable = ['list_name','user_id','list_contacts','list_createdby'];
}
