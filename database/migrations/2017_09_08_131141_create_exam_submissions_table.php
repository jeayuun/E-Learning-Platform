<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained('exams')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->integer('answer_file_id');
            $table->double('total_mark', 5, 3)->default(0.00);
            $table->double('achieve_mark', 5, 3)->default(0.00);
            $table->double('passed_score', 5, 3)->default(0.00);
            $table->tinyInteger('result_status');
            $table->timestamps();

            $table->unique(['student_id', 'exam_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_submissions');
    }
}
