<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    // Correct the property name here
    protected $fillable = [
        'name',
    ];

        // Mutator for capitalizing the first letter of 'name'
        public function setNameAttribute($value)
        {
            $this->attributes['name'] = ucwords(strtolower($value));
        }

}
