<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BhaiaonInside extends Model
{
    use HasFactory;

    protected $table = "bhaiaon_insides";

    protected $fillable = [
        'id','type','valuedt','branch_send','name_aon','acno_nee',
        'money','money_name','name_hub','acno_mee','name_hub',
        'branch_receive','note','user_id','del'
    ];
}
