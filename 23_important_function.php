<?php

//total length of the string.
$name="hem aghara";
echo strlen($name);

echo "<hr>";
echo "<br>";

//check the variable datatype.

$number=21;
echo var_dump($number);

echo "<hr>";
echo "<br>";


//date function:
echo date("d");  
echo "<br>";

echo date("l");
echo "<br>";

echo date("m");
echo "<br>";


echo "<hr>";


//check the string or not.

$user="hrgre";
echo is_string($user);

echo "<br>";
echo "<hr>";


//generate the randome number

echo rand();


echo "<br>";
echo "<hr>";

echo "before";
die();   //here stop the execution no print the after
echo "after";




?>