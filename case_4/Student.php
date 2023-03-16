<?php declare(strict_types=1);

class Student 
{
    private string $name;
    private string $grade;

    public function getName(): string 
    {
        return $this->name;
    }

    public function getGrade(): string 
    {
        return $this->grade;
    }

    public function __construct(string $name, string $grade) 
    {
        $this->name = $name;
        $this->grade = $grade;
    }
}