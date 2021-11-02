<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'student_id', 'education_id', 'lesson_id', 'result'
    ];

    /**
     * Get the student that belongs to result.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the education that owns the result.
     */
    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    /**
     * Get the lesson that owns the result.
     */
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
