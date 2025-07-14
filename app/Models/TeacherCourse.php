<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherCourse extends Model
{
    protected $table = 'teacher_courses';
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class, 'teacher_courses');
    }

    public function Student()
    {
        return $this->hasMany(StudentCourse::class, 'teacher_courses');
    }



}
