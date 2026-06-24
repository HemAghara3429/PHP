<?php

/*
PHP variables can be declared anywhere in the PHP code.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:1]global 2]local 3]static
*/


$roll=19; //when your need here chang the roll number here this variable use multiple time in code when need change then only change the variables.


echo $roll;

echo "<br>";

echo 10*3;

//global variables example:

$x=6;


function number(){
    global $x;
    echo "variables inside the function: $x";
}

number();

echo "<br>";

echo "variables outside the function: $x";



//local variables example.

echo "<br>"; 

function localvariables(){
    $number=123;

    echo "this number access inside the function: $number";
}

localvariables();
echo "<br>";
// echo "this number cannot access the outside: $number";              here give the error because here access the variable cannot access the local variables.


//without using the static keyword decalare as local variables :local variables 

function increment(){
    $num=3;
    $num++;
    echo $num;
}

increment();
increment();
increment();

echo "<br>";

function decrement(){
   static $age=21;
    $age--;
    echo $age;
}
echo "<br>";
decrement();
echo "<br>";
decrement();
echo "<br>";
decrement();

$village="jetpar"; //global variables 


function villagename(){
    global $village;   //here access the global variables using the global keyword.

     echo $village;
    
}

echo "<br>";
villagename();

echo "<br>";

echo "<hr>";

//all variables are diffrent meaning here no have same variables.

$information="morbi";
$INFORMATION="surat";
$Information="Ahemdabad";

echo $information;
echo "<br>";

echo $INFORMATION;
echo "<br>";


echo $Information;
echo "<br>";

?>