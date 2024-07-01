<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BhaiMorpSit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','ref_no','no','date','name_aon','address','phone','crc_f','crc_t','rate','seq_no',
        'aon_ac_name','acno_nee','money_nee','money_nee_name','hub_ac_name','hub_address','acno_mee','money_mee',
        'money_mee_name','note','user_id','department_id','del','count'
    ];
}
