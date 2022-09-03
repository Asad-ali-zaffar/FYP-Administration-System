<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectDetail extends Model
{
    use HasFactory;
    Protected $table="project_detail";
    Protected $primarykey="project_detail_id";

    public function getProject()
    {
        return $this->hasMany('App\Models\Projact','proj_id','proj_id');
    }
}
