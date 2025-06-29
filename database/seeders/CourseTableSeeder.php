<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \App\Models\Course::first();
        if (empty($model)) {
            $department1 = \App\Models\Department::where('title','Department of Architecture')->first();
            $department2 = \App\Models\Department::where('title','Department of History of Art')->first();
            $department3 = \App\Models\Department::where('title','Computer Science')->first();
            $department4 = \App\Models\Department::where('title','Civil engineering')->first();
            $data = [
                [
                    'department_id' => $department3->id,
                    'title' => 'Software Engineering 1',
                    'featured_image' => '/admin/images/courses/course_1.png',
                    'short_code' => 'COMP 015',
                    'featured_text' => 'This course introduces the systematic approach to designing, developing, deploying, and maintaining software systems, covering topics such as software development life cycles, requirements engineering, and basic design principles.',
                    'default_cost' => null,
                    'status' => \App\Libraries\Enumerations\CourseStatus::$APPROVED,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'department_id' => $department3->id,
                    'title' => 'Web Development',
                    'featured_image' => '/admin/images/courses/course_2.jpg',
                    'short_code' => 'COMP 016',
                    'featured_text' => 'This course covers the essential technologies and practices for building dynamic and interactive web applications, including front-end (HTML, CSS, JavaScript) and back-end (server-side scripting, databases) development.',
                    'default_cost' => null,
                    'status' => \App\Libraries\Enumerations\CourseStatus::$APPROVED,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'department_id' => $department3->id,
                    'title' => 'Principles of Programming Languages',
                    'featured_image' => '/admin/images/courses/course_3.jpg',
                    'short_code' => 'COMP 017',
                    'featured_text' => 'This course examines the fundamental concepts underlying various programming paradigms and languages, including syntax, semantics, type systems, and runtime environments, fostering a deeper understanding of language design and implementation.',
                    'default_cost' => null,
                    'status' => \App\Libraries\Enumerations\CourseStatus::$APPROVED,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'department_id' => $department3->id,
                    'title' => 'Introduction to Software Engineering',
                    'featured_image' => '/admin/images/courses/course_4.jpg',
                    'short_code' => 'CSSE1001',
                    'featured_text' => 'Introduction to Software Engineering through programming with particular focus on the fundamentals of computing & programming, using an exploratory problem-based approach. Building abstractions with procedures, data & objects; data modelling; designing, coding & debugging programs of increasing complexity',
                    'default_cost' => null,
                    'status' => \App\Libraries\Enumerations\CourseStatus::$APPROVED,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'department_id' => $department3->id,
                    'title' => 'Algorithms & Data Structures',
                    'featured_image' => '/admin/images/courses/course_5.jpg',
                    'short_code' => 'COMP3506',
                    'featured_text' => 'Data structures & types, mapping of abstract information structures into representations on primary & secondary storage. Analysis of time & space complexity of algorithms. Sequences. Lists. Stacks. Queues. Sets, multisets, tables. Trees. Sorting. Hash tables. Priority queues. Graphs. String algorithms.',
                    'default_cost' => null,
                    'status' => \App\Libraries\Enumerations\CourseStatus::$APPROVED,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'department_id' => $department3->id,
                    'title' => 'Programming in the Large',
                    'featured_image' => '/admin/images/courses/course_6.jpg',
                    'short_code' => 'CSSE2002',
                    'featured_text' => 'This course covers techniques that scale to programming large software systems with teams of programmers. The techniques are explained in the context of the specification, implementation, testing and maintenance of software systems. The course utilises the Java programming language and covers programming concepts such as data abstraction, procedural abstraction, unit testing, class hierarchies and polymorphism, exception handling, file I/O, and graphical user interfaces.',
                    'default_cost' => null,
                    'status' => \App\Libraries\Enumerations\CourseStatus::$APPROVED,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ];
            \App\Models\Course::insert($data);
        }
    }
}
