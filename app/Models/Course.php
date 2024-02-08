<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'full_name',
        'dob',
        'address',
        'contact',
        'email',
    ];

    public static function create(array $input)
    {
    }

    public function guardians()
    {
        return $this->hasMany(Guardian::class, 'student_id', 'id');
    }


}
