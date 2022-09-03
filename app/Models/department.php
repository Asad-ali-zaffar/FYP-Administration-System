<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class department extends Model
{
    use HasFactory;
    protected $table="department";
    protected $primarekey="dept_id";

    public function setDepNameAttribute($value)
    {
        $this->attributes['dep_name']=ucwords($value);
    }
    public static function getTeacherNameById($id){
        return department::where('dept_id', $id)->get();
    }
    public static function getUserNameById($id){
        return department::where('dept_id', $id)->pluck('dep_name')->first();
    }
    public static function getdepartmentById($id){
        return department::where('dept_id', $id)->get();
    }
    // {{ App\Models\department::getdepartmentById($value->user_id)}}
    // {{ App\Models\department::getUserNameByID($value->user_id)}}

    // {{ App\Models\Teacher::getUserNameByID($value->user_id)}}
    // {{ App\Models\department::getTeacherNameById($value->user_id)}}

}
