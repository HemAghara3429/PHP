<?php

$name="hem aghara";

//print the string.


echo "my name is:".$name;  //method 1

echo "<br>";

echo "my name is: $name"; //method 2

echo "<br>";

echo 'my name is:'.$name;  //method 3

echo "<br>";
echo "<hr>";

//combine the string in single statment. (concat the two string.....)

//example 1:

$info ="hem aghara";
$age=21;

echo 'my name is:'.$info.' and my age is:'.$age;

echo "<br>";
echo "<hr>";

//example 2:

$str1="Hello How Are You ";
$str2="my name is ";
$str3="hem aghara";

echo $str1.$str2.$str3;

echo "<br>";
echo "<hr>";

//string length find.

$str4="hem aghara";
echo strlen($str4);


echo "<br>";
echo "<hr>";


//Counts the number of words in a string.

$str5="aghara hem nareshbhai";
echo str_word_count($str5);

echo "<br>";
echo "<hr>";


//convert the string upper case.

$str6="hem";
echo strtoupper($str6);


echo "<br>";
echo "<hr>";

//convert the string lower case.

$str7="HEM";
echo strtolower($str7);


echo "<br>";
echo "<hr>";

//Converts the first character to uppercase.

$str8="hem";
echo ucfirst($str8);

echo "<br>";
echo "<hr>";

//Converts the first letter of each word to uppercase.

$str9="hem aghara";
echo ucwords($str9);


echo "<br>";
echo "<hr>";


//Reverses a string.

$str10="hem";
echo strrev($str10);

echo "<br>";
echo "<hr>";

//Finds the position of a substring.

echo strpos("Hello Hem", "Hem");

echo "<br>";
echo "<hr>";

//str_replace:Replaces text in a string.

echo str_replace("Hem", "Rahul", "Hello Hem");

echo "<br>";
echo "<hr>";


$str11 = "  Hem  ";
echo trim($str11);


echo "<br>";
echo "<hr>";

//Extracts part of a string.

echo substr("hemaghara",0,4);

echo "<br>";
echo "<hr>";

//compare the two string.

echo strcmp("Hem", "Hemasd"); //equal string give the 0 and not equal string output -1.

echo "<br>";
echo "<hr>";

echo strcasecmp("Hem","Hem");


echo "<br>";
echo "<hr>";







?>