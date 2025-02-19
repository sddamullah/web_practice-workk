<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register_form extends Model
{
    use HasFactory;

    protected $fillable=[
            'fname', 'lname', 'address' ,  'city', 'pincode', 'email'
        




    ];
}
