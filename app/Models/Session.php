<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table="session";
    protected $primarekey="ses_id";

    public function setSesNameAttribute($value)
    {
        $this->attributes['ses_Name']=ucwords($value);
    }
    public static function getUserNameById($id){
        return Session::where('ses_id', $id)->pluck('ses_Name')->first();
    }
    // {{ App\Models\Session::getUserNameByID($value->user_id)}}

}
