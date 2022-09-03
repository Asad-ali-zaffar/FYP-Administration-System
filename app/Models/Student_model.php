<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student_model extends Model
{
    use HasFactory, Notifiable;
    protected $table="student";
    protected $primarykey="id";
    public function getDepartment()
    {
        return $this->hasMany('App\Models\department','dept_id','dept_id');
    }
    public function getprogram()
    {
        return $this->hasMany('App\Models\Program','prog_id','prog_id');
    }
    public function getSession()
    {
        return $this->hasMany('App\Models\Session','ses_id','std_session_id');
    }
    public function setStdNameAttribute($value)
    {
        $this->attributes['std_name']=ucwords($value);
    }
    public static function getUserNameById($id){
        return Student_model::where('id', $id)->pluck('std_reg_no')->first();
    }
    public static function getStudentNameById($id){
        return Student_model::where('id', $id)->get();
    }
    // {{ App\Models\Student_model::getUserNameByID($value->user_id)}}
    // {{ App\Models\Student_model::getStudentNameById($value->user_id)}}

}
