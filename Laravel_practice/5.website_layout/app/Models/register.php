<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $fillable = [
        'mainehead', 'headcontant', 'firstchart_head', 'firstchart_contant',
        'secondchart_head',  'secondchart_contant',
        




    ];
}
