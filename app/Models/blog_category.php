<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_category extends Model
{
    public function blog(){
        return $this->belongsToMany(blog::class,'blog_to_blog_categories','blog_category_id','blog_id');
    }
}
