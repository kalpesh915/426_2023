<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $timestamps = false;
    // Accessor (modify data before view file)
    public function getfnameAttribute($value){
        return strtoupper($value);
    }

    public function getcityAttribute($value){
        return $value." ( Gujarat )";
    }

    // mutator functions
    public function setlnameAttribute($value){
        return $this->attributes["lname"] = strtoupper($value);
    }

    // one 2 one data function
    public function getAttendance(){
        return $this->hasOne(attendance::class);
    }
    
    // one 2 many
    public function getExams(){
        return $this->hasMany(examination::class);
    }
}
