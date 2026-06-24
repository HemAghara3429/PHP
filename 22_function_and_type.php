<?php


//two type of function:1]bulit in function 2]user defined function.

//simple function

function welcome(){
    echo "welcome hem";
}

welcome();


echo "<br>";
echo "<hr>";

//bulit in function alredy provide by the php .

$name="hem";

echo strlen($name);

echo "<br>";
echo "<hr>";


//without parameter and without return values.

function show()
{
    echo "Welcome";
}

show();


echo "<br>";
echo "<hr>";


//function with parameter.

function information($number){
    echo "this number is:$number";
}

information(12);

echo "<br>";
echo "<hr>";

//function with return values.

function addition(){

 return 10+20;
}

echo addition();

echo "<br>";
echo "<hr>";


//function with paramerter and return value.

function multiplication($a,$b){
    return $a*$b;
}

echo multiplication(10,20);


echo "<br>";
echo "<hr>";

//recursion function.

function countDown($num){
    if($num<=0){
        return ;
    }

    echo $num;
    echo "<br>";
    countDown($num-1);
}

countDown(5);


echo "<br>";
echo "<hr>";

//one function call inside the another function .....

function son(){
    echo "I am the son";
}

function father(){
    son();
    echo "<br>";
    echo "I am Father";

}

father();



//decalre the function before the call the function.


echo "<br>";
echo "<hr>";


hello();

function hello(){
    echo "hello hem";
}

?>


