<?php

//PHP does not support multiple inheritance.

//A Trait is a mechanism used to reuse code in multiple classes.

//Traits allow you to write a method once and use it in many classes.

trait Message
{
    public function showMessage()
    {
        echo "Welcome to PHP";
    }
}


trait mark
{
    public function showMark()
    {
        echo "student mark";
    }
}

//multiple trait use in one class .
class Student
{
    use Message;
    use mark;
}


$obj = new Student();

$obj->showMessage();

echo "<br>";

$obj->showMark();

?>