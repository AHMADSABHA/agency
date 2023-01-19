<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    use HasFactory;
   protected $fillable=['feature_id','title', 'subtitle','discription','list', 'sublist'];
    public function plan(){
        return $this->belongsToMany(plan::class,'plan_feautre_relations','feature_id','plan_id');
    }
}
