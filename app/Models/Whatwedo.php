<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatwedo extends Model
{
    use HasFactory;
    protected $table="whatwedos";
    protected $fillable = ["image", "title","subtitle", "discription","link","created_at", "updated_at"];
}
