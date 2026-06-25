<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$teacher = new Teacher();
$teacher->getteacher();

echo "<br>";

$student = new Student();
$student->getstudent();

echo "<br>";

$employee = new Employee();
$employee->getemployee();

?>