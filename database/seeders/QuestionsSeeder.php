<?php

namespace Database\Seeders;
use App\Models\Question;
use App\Models\Mcq;
use App\Models\TeacherCourseLesson;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = Question::all();
        $questionContents = Mcq::all();
        $teacherCourses = TeacherCourseLesson::all();
        $teachers = Teacher::all();

        foreach ($teachers as $teacher) {

        }
    }
}
