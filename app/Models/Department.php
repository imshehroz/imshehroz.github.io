<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    // Correct the property name here
    protected $fillable = [
        'name',
        'location'
    ];

        // Mutator for capitalizing the first letter of 'name'
        public function setNameAttribute($value)
        {
            $this->attributes['name'] = ucwords(strtolower($value));
        }
    
        // Mutator for capitalizing the first letter of 'address'
        public function setLocationAttribute($value)
        {
            $this->attributes['location'] = ucwords(strtolower($value));
        }
}
