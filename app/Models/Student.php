<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'first_name', 'initials', 'insertion', 'last_name', 'postal_code', 'street', 'number', 'number_addition', 'city'
    ];
}
