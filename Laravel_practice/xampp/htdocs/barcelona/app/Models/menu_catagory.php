<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_catagory extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory_name', 
    ];

}
