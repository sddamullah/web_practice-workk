<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_register extends Model
{
    use HasFactory;
    protected $fillable = [
        'product',  'detail',
            'img', 'price', 'catagory_name',

    ];
}
