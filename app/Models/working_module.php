<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class working_module extends Model
{
    use HasFactory;
    protected $fillable=['icon','step','title','subtitle'];
}
