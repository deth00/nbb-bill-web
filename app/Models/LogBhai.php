<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogBhai extends Model
{
    protected $table = "log_bhai";

    public function name()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
