<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function blog(){
        return $this->belongsToMany(blog::class,'blog_to_blog_tags','blog_tag_id','blog_id');
    }
}
