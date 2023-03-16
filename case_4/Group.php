<?php declare(strict_types=1);

class Group 
{
    private array $students = array();

    public function addStudent(Student $student) 
    {
        array_push($this->students, $student);
    }

    public function showGrades() 
    {
        $grades = array();

        foreach($this->students as $student) {
            $grade = match ($student->getGrade()) {
                'A' => 80,
                'B' => 60,
                'C' => 40
            };
            array_push($grades, $grade);
        }

        echo array_sum($grades) / count($grades);
    }
}

/*
Add a function to move a student from one group to another.

Show the average score of both groups. 
Move the top student from one group with the lowest scoring student from another. 
Show the averages again - how were these affected?
*/