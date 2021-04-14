<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anniversary extends Model
{
    protected $fillable = [
        'user_id', 'people_id','genre','date' ,'memo','anniversary_hash'
    ];
}