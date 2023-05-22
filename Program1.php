<?php

/*Write a program that calculates the sum for each subject for each student such that it shows like:
0 < N < 15
Marks for student 1 are : 150 ( where 150 is sum of english, science, maths )
Marks for student 2 are : 350 ( where 150 is sum of english, science, maths )
.
.
.
Marks for student N are : 150 ( where 150 is sum of english, science, maths )
and 
Average English marks for whole class ( total sum of english of all / total number of students )
Average Maths marks for whole class ( total sum of maths  of all / total number of students )
Average Science marks for whole class ( total sum of science of all / total number of students )*/
        $students = array(
            array('student1', 80, 75, 90),
            array('student2', 85, 90, 80),
            array('student3', 70, 65, 75),
            array('student4', 80, 75, 99),
            array('student5', 81, 75, 90),
            array('student6', 80, 77, 90),
            array('student7', 82, 75, 90),
            array('student8', 80, 75, 92),
            array('student9', 80, 75, 60),
            array('student10', 60, 75, 90),
            array('student11', 80, 72, 90),
            array('student12', 80, 75, 94),
            array('student13', 80, 75, 90),
            array('student14', 89, 75, 90),
            array('student15', 80, 65, 90),
            
        );
        
        $subjectNames = array('English', 'Maths', 'Science');
        
        $subjectSums = array();
        $totalStudents = count($students);
        
        // Calculate the sum for each subject for each student
        foreach ($students as $student) {
            $name = $student[0];
            $totalMarks = 0;
            for ($i = 1; $i < count($student); $i++) {
                $subjectScore = $student[$i];
                $totalMarks += $subjectScore;
        
                if (!isset($subjectSums[$i])) {
                    $subjectSums[$i] = 0;
                }
        
                $subjectSums[$i] += $subjectScore;
            }
        
            echo "Marks for $name are: $totalMarks<br>";
        }
        
        echo "<br>";

        // Calculate the average marks for each subject
foreach ($subjectSums as $subjectIndex => $subjectSum) {
    $subjectName = $subjectNames[$subjectIndex - 1];
    $averageMarks = $subjectSum / $totalStudents;
    echo "Average $subjectName marks for the whole class: $averageMarks<br>";
}

?>