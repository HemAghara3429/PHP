<?php

//invoke method is used to call the object as a function.
class Student{
    
    public function __invoke($name){
        echo "Hello ".$name;
    }

    public function getName($name){
        echo $name;
    }
}

$c1=new Student();
$c1("John"); //invoke method is called when we call the object as a function.
echo "<br>";    
$c1->getName("Jane"); //calling getName method normally
?>