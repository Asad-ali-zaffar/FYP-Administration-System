<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projact extends Model
{
    use HasFactory;
    protected $table="project";
    protected $primarykey="proj_id";

    public function getStudent(){
      return  $this->hasMany('App\Models\Student_model','id','id');
    }

    public function setProjNameAttribute($value)
    {
        $this->attributes['proj_name']=ucwords($value);
    }
    public static function getUserNameById($id){
        return Projact::where('proj_id', $id)->pluck('proj_name')->first();
    }
    // {{ App\Models\Projact::getUserNameByID($value->user_id)}}
    public static function getProjactById(){
        return Projact::all();
    }
    public static function getprojactNameById($id){
        return Projact::where('superviser_id', $id)->get();
    }
    public static function getStudentNameById($id){
        return Projact::where('proj_id', $id)->get();
    }
    // {{ App\Models\Projact::getStudentNameById()}}

    // {{ App\Models\Projact::getProjactById()}}

}
