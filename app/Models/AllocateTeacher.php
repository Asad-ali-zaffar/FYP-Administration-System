<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllocateTeacher extends Model
{
    use HasFactory;
    protected $table="allocate_teacher";
    protected $primarykey="allocate_teacher_id";

    public function getTeacher()
    {
        return $this->hasMany('App\Models\Teacher','id','id');
    }
    public function getStudent()
    {
        return $this->hasMany('App\Models\Student_model','id','id');
    }
    public static function getStudentNameById($id){
        return AllocateTeacher::where('id', $id)->get();
    }
    // {{ App\Models\AllocateTeacher::getStudentNameById($value->user_id)}}


}
