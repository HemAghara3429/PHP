<?php

//class decalare as abstracat class
abstract class School{
 
//here method decalre as abstract method.
//abstract method cannot have body.
//abstract method can implement inside the other class which is extend by other class..
abstract function StudentMark();

}

//student class extend the school
class Student extends School{

// here abstract method here the implement and show the studentmark.
	function StudentMark()
    {   
      echo "this is the show the student mark";
    }
}

$s1=new Student();
$s1->StudentMark();;


?>