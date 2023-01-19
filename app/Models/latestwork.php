<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latestwork extends Model
{
    use HasFactory;

    protected $table='projects';
    protected  $primaryKey = 'project_id';
   protected $fillable=['project_id','cover_image','title','subtitle', 'client', 'location','project_url','description', 'title2','description2','image' ,'project_date','title3','disc3'];
    public function categories()
    {
        return $this->belongsToMany(project_category::class, 'project_category_relations', 'project_id', 'project_category_id')->withTimestamps();
    }
}
