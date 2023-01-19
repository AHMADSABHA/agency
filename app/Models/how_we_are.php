<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class how_we_are extends Model
{
    use HasFactory;
    protected $fillable=[ 'title', 'subtltle','discription','image'];
}
