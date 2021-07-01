<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    protected $guarded = [];

    public function detauk()
    {
        return $this->hasMany(AttendanceDetail::class);
    }
}
