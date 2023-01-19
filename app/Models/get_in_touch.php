<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class get_in_touch extends Model
{
    use HasFactory;
    protected $fillable=['title','subtitle','icon'];
}
