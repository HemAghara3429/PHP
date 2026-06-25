<?php

//Type Hinting is used to specify what type of data a function parameter, return value, or property should accept.
//inside the parameter we can specify the type of data that is expected to be passed to the function.

function add(int $a, int $b){
    return $a+$b;
}

echo add(5,10);

echo "<br>";


class Student{

//Type hinting can also be used in class methods to specify the type of data that is expected to be passed to the method.
function getName(string $name){
    return $name;
}
}

$c1=new Student();
echo $c1->getName("John");
?>