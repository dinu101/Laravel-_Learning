<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Student;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 10 Students
        $students = [];
        for ($i = 1; $i <= 100; $i++) {
            $students[] = Student::create([
                'name' => 'Student ' . $i,
                'email' => 'student'.$i.'@example.com'
            ]);
        }

        // 5 Courses
        $courses = [];
        for ($i = 1; $i <= 10; $i++) {
            $courses[] = Course::create([
                'title' => 'Course ' . $i,
                'description' => 'Description for course ' . $i
            ]);
        }

        // Assign courses to students (2–3 courses per student)
        foreach ($students as $student) {
            $assignedCourses = collect($courses)->random(rand(2,3))->pluck('id')->toArray();
            $student->courses()->attach($assignedCourses);
        }

        // Optional: Assign students to courses (2–3 students per course)
        foreach ($courses as $course) {
            $assignedStudents = collect($students)->random(rand(2,3))->pluck('id')->toArray();
            $course->students()->syncWithoutDetaching($assignedStudents);
        }
    }
}
