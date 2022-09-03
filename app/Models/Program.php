<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table="program";
    protected $primarykey="prog_id";

    public function getdpt()
    {
        return $this->hasMany('App\Models\department','dept_id','dept_id');
    }
    public function setProgNameAttribute($value)
    {
        $this->attributes['prog_name']=ucwords($value);
    }
    public static function getUserNameById($id){
        return Program::where('prog_id', $id)->pluck('prog_name')->first();
    }
    public static function getProgramById(){
        return Program::all();
    }
    
    // {{ App\Models\Program::getProgramById()}}
    // {{ App\Models\Program::getProgramById($value->user_id)}}



}
