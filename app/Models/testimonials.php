<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonials extends Model
{
    protected $table = 'testimonials';
    protected $fillable=["icon", "discription","Name", "position","created_at", "updated_at"];
}
