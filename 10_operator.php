<?php

$x=10;
$y=20;

// Arithmetic operators:

echo $x+$y;  echo "<br>";
echo $x-$y;  echo "<br>";
echo $x*$y;  echo "<br>";
echo $x/$y;  echo "<br>";
echo $x%$y;  echo "<br>";

// Assignment operators:

echo "Assignment operators<br>";

echo $x+=$y;  echo "<br>";
echo $x-=$y;  echo "<br>";
echo $x*=$y;  echo "<br>";
echo $x/=$y;  echo "<br>";

// Comparison operator:

echo "Comparison operator<br>";

echo $x>$y;   echo "<br>";
echo $x<$y;   echo "<br>";
echo $x>=$y;  echo "<br>";
echo $x<=$y;  echo "<br>";


//increment and decrement operator:

echo "<hr>";

$x=10;

echo "Post-increment";
echo "<br>";
echo $x++; echo "<br>";
echo $x;   echo "<br>";


echo "<hr>";

$num=10;

echo "Post-increment";
echo "<br>";
echo ++$num;  echo "<br>";
echo $x;   echo "<br>";


echo "<hr>";


//logical operator.

$a=10;
$b=20;
$c=30;

//here both condition are not trye so output are not print .
if($a==10 && $b==30){
    echo "value a=10 and value b=30";
}


//here both condition are true so output show.
if($a==10 && $b==20){
    echo "value a=10 and value b=20";
}

echo "<br>";

//if the one condition true then print the output.
if($a==10 || $b==20){
    echo "true";
}
echo "<hr>";


// here if the condition the false then print the output.


if($a!=20){
    echo "here if the condition the false then print the output";
}

//here three condition give at least the one condition true.

echo "<hr>";


if($a==10 || $b==40 || $c==1000){
    echo "here three condition give at least the one condition true.";
}

echo "<hr>";

//here the all condition must be correct then print the output.

if($a==10 && $b==20 && $c==30){
    echo "here the all condition must be correct then print the output";
}





?>