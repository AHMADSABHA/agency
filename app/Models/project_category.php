<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_category extends Model
{
    protected  $primaryKey = 'project_category_id';
    public function projects()
    {
        return $this->belongsToMany(latestwork::class, 'project_category_relations', 'project_id' ,'project_category_id',);
    }
}
