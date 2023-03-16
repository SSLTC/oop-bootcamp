<?php declare(strict_types=1);

require 'Group.php';
require 'Student.php';

$students1 = array(
    'Thomas' => 'A', 
    'Seppe' => 'A', 
    'Raoul' => 'A', 
    'Beatrice' => 'C', 
    'Vincent' => 'B', 
    'Sofie' => 'B', 
    'Toon' => 'A',
    'Xander' => 'A',
    'Niels' => 'B',
    'Jitske' => 'B'
);

$students2 = array(
    'Nico' => 'A',
    'Freke' => 'B',
    'Claire' => 'C',
    'Sarah' => 'B',
    'Celine' => 'C',
    'Pious' => 'A',
    'Ward' => 'C',
    'Yousra' => 'B',
    'James' => 'C',
    'Marieke' => 'A'
);

$group1 = new Group;

foreach($students1 as $name => $grade) {
    $student1 = new Student($name, $grade);
    $group1->addStudent($student1);
}

echo "Average score of group 1 is ", $group1->showAverageGrade(), "%<br>";

$group2 = new Group;

foreach($students2 as $name => $grade) {
    $student2 = new Student($name, $grade);
    $group2->addStudent($student2);
}

echo "Average score of group 2 is ", $group2->showAverageGrade(), "%<br>";
echo "<br>";

$studentGroup2 = $group2->moveStudent('Pious');
$group1->addStudent($studentGroup2);

echo "Moved one student of group 2 to group 1<br>";
echo "Average score of group 1 is ", $group1->showAverageGrade(), "%<br>";
echo "Average score of group 2 is ", $group2->showAverageGrade(), "%<br>";

echo "<br>";

$studentsWithHighestGrades = $group2->getStudentsWithGrade(Grades::A);

foreach ($studentsWithHighestGrades as $student) {
    echo "Group 1 counts ", $group1->addStudent($student), " students<br>";
}

$studentsWithLowestGrades = $group1->getStudentsWithGrade(Grades::C);

foreach ($studentsWithLowestGrades as $student) {
    echo "Group 2 counts ", $group2->addStudent($student), " students<br>";
}

echo "Switched students of group 2 with highest score to group 1 with lowest score<br>";
echo "Average score of group 1 is ", $group1->showAverageGrade(), "%<br>";
echo "Average score of group 2 is ", $group2->showAverageGrade(), "%<br>";