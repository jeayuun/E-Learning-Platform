<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\TeacherCourse;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = Teacher::all(); // Get all teachers
        $courses = Course::all();   // Get all courses

        foreach ($courses as $course) {
            $randomTeacher = $teachers->random(); // Pick a random teacher for each course

            TeacherCourse::create([
                'course_id' => $course->id,
                'teacher_id' => $randomTeacher->id,
            ]);
        }
    }
}
