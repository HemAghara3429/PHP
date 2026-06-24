<?php

$students = ["Hem", "Prince", "Manav"];

echo count($students);
echo "<br>";

array_push($students,"mohit");  //add mohit inside the array
print_r($students);
echo "<br>";

array_pop($students);  //remove the last element in the array.
print_r($students);
echo "<br>";

array_shift($students);   //remove the first element in the array (hem remove).....
print_r($students);
echo "<br>";

array_unshift($students,"zala");  //add the element in beginning (student name zala)
print_r($students);
echo "<br>";

if(in_array("zala",$students)){               //find the student name whether name are exist or not inside the array....
    echo "student are found inside the array";
    echo "<br>";
}else{
    echo "student are not found inside the array";
}

$number=[20,30,40,50,10,5,2,15,20,24,22];
$string = implode($number);

print_r($string); 
echo "<br>";
sort($number);  //sort the array Ascending
print_r($number); 
echo "<br>";



rsort($number); //sort the array Desecnding order.
print_r($number);
echo "<br>";



$arr1=["hem","heet"];
$arr2=["manav","prince"];

$result=array_merge($arr1,$arr2);        //merge the two array into one array.
print_r($result);
echo "<br>";


$numbers = [1,2,3,4,5];
print_r(array_reverse($numbers));      //reverse the array
echo "<br>";


$info = [1,2,3,4,5,2,3,4,5];
print_r(array_unique($info));    //unique number include inside array.
echo "<br>";

$sum=[10,20,30];
echo array_sum($sum);    //sum of the array element.



?>