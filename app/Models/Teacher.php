<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    // Correct the property name here
    protected $fillable = [
        'name',
        'phone',
        'department',
        'address',
        'gender',
        'cnic',
        'date_of_birth'
    ];

        // Mutator for capitalizing the first letter of 'name'
        public function setNameAttribute($value)
        {
            $this->attributes['name'] = ucwords(strtolower($value));
        }
    
        // Mutator for capitalizing the first letter of 'address'
        public function setAddressAttribute($value)
        {
            $this->attributes['address'] = ucwords(strtolower($value));
        }
}
