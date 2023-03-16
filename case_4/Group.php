<?php declare(strict_types=1);

class Group 
{
    private array $students = array();

    public function addStudent(Student $student): int 
    {
        return array_push($this->students, $student);
    }

    public function moveStudent(string $name): Student 
    {
        foreach ($this->students as $index => $student) {
            if ($student->getName() === $name) {
                return array_splice($this->students, $index, 1)[0];
            }
        }
    }

    private function replaceLettersWithNumbers(): array 
    {
        $grades = array();

        foreach ($this->students as $student) {
            $grade = $student->getGrade()->value;
            array_push($grades, $grade);
        }

        return $grades;
    }

    public function showAverageGrade(): void 
    {
        $grades = self::replaceLettersWithNumbers();
        echo round(array_sum($grades) / count($grades), 2);
    }

    public function getStudentsWithGrade(Grades $grade): array 
    {
        $studentsWithGrade = array();

        foreach ($this->students as $index => $student) {
            if ($student->getGrade() === $grade) {
                array_push($studentsWithGrade, $student);
                array_splice($this->students, $index, 1);
            }
        }

        return $studentsWithGrade;
    }
}