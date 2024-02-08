<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;
    protected $guarded =[];


    public function guardians()
    {
        return $this->belongsToMany(Guardian::class, 'guardian_student');
    }
}
