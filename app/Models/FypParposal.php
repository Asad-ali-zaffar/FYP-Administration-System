<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FypParposal extends Model
{
    use HasFactory;
    protected $table="fyp_parposals";
    protected $primarykey="parposals_id";
}
