<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fyp_Committee extends Model
{
    use HasFactory;
    protected $table="fyp_committee";
    protected $primaryKey="com_id";

    public function getDpt()
    {
        return $this->hasMany('App\Models\department','dept_id','dept_id');
    }
    public function getTeacher()
    {
        return $this->hasMany('App\Models\Teacher','teacher_id','teacher_id');
    }
}
