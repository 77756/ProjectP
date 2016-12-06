<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    protected $fillable = ['$name'];
    public function roosters()
    {
        return $this->belongsTo(Rooster::class);
    }
    public function vakken()
    {
        return $this->hasMany(Vak::class);
    }
}