<?php declare(strict_types=1);

enum Grades: int 
{
    case A = 80;
    case B = 60;
    case C = 40;
}

class Student 
{
    private string $name;
    private Grades $grade;

    public function getName(): string 
    {
        return $this->name;
    }

    public function getGrade(): Grades 
    {
        return $this->grade;
    }

    public function __construct(string $name, string $grade) 
    {
        $this->name = $name;
        $this->grade = match($grade) {
            'A' => Grades::A,
            'B' => Grades::B,
            'C' => Grades::C
        };
    }
}