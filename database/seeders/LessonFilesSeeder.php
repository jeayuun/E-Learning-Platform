<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\FileLesson;
use App\Models\TeacherCourseLesson;
use App\Models\User;
use App\Models\Teacher;
use App\Models\VideoLesson;

use Illuminate\Database\Seeder;

class LessonFilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $teachercourses = TeacherCourseLesson::all();
        $teachers = Teacher::all();

        foreach ($teachercourses as $teachercourse) {
            $number = 1;
            $stringnum = "File - " . $number;
            foreach ($teachers as $teacher) {
                $model = FileLesson::create([
                    'lesson_id' => $teachercourse->id,
                    'teacher_id' => $teacher->id,
                    'part_number' => $stringnum++,
                    'file_title' => null,
                    'description' => null,
                    'file_url' => null,
                ]);
            }
        }

    }





}

