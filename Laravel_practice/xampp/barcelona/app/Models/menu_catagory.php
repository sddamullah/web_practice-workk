<?php

namespace App\Models;

use App\Http\Controllers\myController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_catagory extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory_name',
        'catagory_img',
        'catagory_description',
        'slug',
        
    ];
    public function products(){
        return $this->hasMany(myController::class, 'menu_catagory_id', 'id');
    }

}
