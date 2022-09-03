<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifiy extends Model
{
    use HasFactory;
    protected $table="notifications";
    protected $primarykey="id";
    
}
