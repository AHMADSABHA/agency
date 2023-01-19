<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table="teamss";
   protected $fillable=['team_det_id','image','name','position','facebook','twitter','dribbble','discription','youtube','behance','vemo'];
}
