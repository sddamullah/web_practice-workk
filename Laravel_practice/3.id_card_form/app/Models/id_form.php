<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class id_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname','lname','fthname','dob','idate','exdate','paddress','taddress'
    ];
}
