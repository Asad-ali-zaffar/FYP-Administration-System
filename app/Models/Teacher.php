<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Teacher extends Model
{
    use HasFactory, Notifiable;
    protected $table="tbl_teacher";
    protected $primarekey="id";

    public function getDpt()
    {
        return $this->hasMany('App\Models\department','dept_id','dept_id');
    }
    public function setTeacherNameAttribute($value){
        $this->attributes['teacher_name'] = ucwords($value);
    }
    public static function getUserNameById($id){
        return Teacher::where('id', $id)->pluck('teacher_name')->first();
    }
    public static function getTeacherNameById($id){
        return Teacher::where('id', $id)->get();
    }
    // {{ App\Models\Teacher::getUserNameByID($value->user_id)}}
    // {{ App\Models\Teacher::getTeacherNameById($value->user_id)}}

    
}
