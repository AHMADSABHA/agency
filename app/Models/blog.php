<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $primaryKey = 'blog_id';
    protected $fillable=[ 'blog_id','image','tag','date_blog','title', 'disc', 'sub_image','title2', 'disc2','list'];
    public function comment(){
        return $this->hasMany(comment::class,'blog_id');
    }
    public function blog_category(){
        return $this->belongsToMany(blog_category::class,'blog_to_blog_categories','blog_id','blog_category_id');
    }
    public function blog_tag(){
        return $this->belongsToMany(tag::class,'blog_to_blog_tags','blog_id','blog_tag_id');
    }
}
