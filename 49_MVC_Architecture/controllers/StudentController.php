<?php

require_once __DIR__ . "/../models/StudentModel.php";

class StudentController
{
    public function getStudentData()
    {
        $student = new StudentModel();

        $name = $student->getStudentData();

        require_once __DIR__ . "/../views/StudentView.php";
    }
}

?>