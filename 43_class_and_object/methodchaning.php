<?php

// Method Chaining
// Method chaining is a technique in object-oriented programming where multiple methods can be called on the same object in a single line of code. This is achieved by having each method return the object itself (usually using $this), allowing for a chain of method calls.
class Car{
    function start(){
        echo "Car started <br>";
        return $this;
    }

    function drive(){
        echo "Car is driving <br>";
        return $this;
    }
}

$c1=new Car();
$c1->start()->drive();//as we are returning the object itself from the start() method, we can call the drive() method on the same object in a single line of code.

?>