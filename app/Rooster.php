<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Rooster extends Model
{
    protected $fillable = ['$name'];
    public function leraren()
    {
        return $this->hasMany(Leraar::class);
    }
    public function studenten()
    {
        return $this->hasMany(Student::class);
    }
}