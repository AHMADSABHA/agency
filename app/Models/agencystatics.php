<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agencystatics extends Model
{
    protected $fillable=['icon','number','extinsion','type'];
    use HasFactory;
}
