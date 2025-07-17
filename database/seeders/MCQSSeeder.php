<?php

namespace Database\Seeders;
use App\Models\Question;
use App\Models\Mcq;
use App\Models\TeacherCourseLesson;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MCQSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = Question::all();
        $questionContents = Mcq::all();
        $teacherCourses = TeacherCourseLesson::all();
        $teachers = Teacher::all();

        foreach ($teacherCourses as $teacherCourse) {
            $model = Mcq::create([
                'lesson_id' => $teacherCourse->id,
                'part_number' => 'Add Question Part Number Here',
                'question' => 'Please add a Question Here',
                'option_1' => 'Insert Questions 1',
                'option_2' => 'Insert Question 2',
                'option_3' => 'Insert Question 3',
                'option_4' => 'Insert Question 4',
                'right_answer' => null,
                'description' => null,
                'default_mark' => 2.00,
            ]);
        }
    }
}
