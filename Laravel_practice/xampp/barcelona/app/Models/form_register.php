<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_register extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'date', 'req', 'person',
    ];
}
