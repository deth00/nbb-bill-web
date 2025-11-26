<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BhaiMorp extends Model
{
    use HasFactory;

    protected $table = "bhaimops";

    public function logBhai()
    {
        return $this->hasMany(LogBhai::class, 'bhaimops_id', 'id');
    }
}
