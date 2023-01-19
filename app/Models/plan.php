<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    protected  $primaryKey = 'plan_id';
    protected $fillable=['plan_id','title','price','checked','hidden'];
    protected $nullable=['hidden'];
    public function feature(){
        return $this->belongsToMany(feature::class,'plan_feautre_relations','plan_id','feature_id');
    }
   
}
