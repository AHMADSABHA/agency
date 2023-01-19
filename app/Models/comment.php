<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable=['id','blog_id','name','date_comment','icon','content'];
    public function blog(){
        return $this->belongsTo(blog::class,null,'blog_id');
    }
}
