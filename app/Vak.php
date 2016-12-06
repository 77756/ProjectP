<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Vak extends Model
{
    protected $fillable = ['$name'];
    public function leraren()
    {
        return $this->belongsTo(Leraar::class);
    }
    public function studenten()
    {
        return $this->belongsTo(Student::class);
    }
}