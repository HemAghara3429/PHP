<?php

// Store multiple values in a single variable

$users = array("hem", "prince", "manav");
$number = [1,2,3,4,5];

echo $users[0];

echo "<br>";
echo "<hr>";

//for loop print the array

for($i = 0; $i < count($users); $i++){
    echo $users[$i];
    echo "<br>";
}

echo "<br>";
echo "<hr>";


//foreach loop print the array.
foreach($number as $x){
    echo $x;
}


echo "<br>";
echo "<hr>";


//foreach loop other method print the array.

foreach($number as $x):
    echo $x;
endforeach ; 


echo "<br>";
echo "<hr>";

$information = ["name" => "anil","address"=>"morbi","district"=>"morbi","age"=>22];

//access the array.

echo $information["name"];


echo "<br>";
echo "<hr>";

foreach($information as $data){
    echo $data;
    
echo "<br>";

}


echo "<br>";
echo "<hr>";


$profile = [
    [1, "hem", "hemaghara@gmail.com", "8200973720"],
    [2, "prince", "prince@gmail.com", "9265631343"]
];

for($i = 0; $i < count($profile); $i++) {
    for($j = 0; $j < count($profile[$i]); $j++) {
        echo $profile[$i][$j] . " ";
    }
    echo "<br>";
}


echo "<br>";
echo "<hr>";

$students = [
    [
        "id" => 1,
        "name" => "Hem",
        "email" => "hem@gmail.com",
        "mobile" => "9876543210"
    ],
    [
        "id" => 2,
        "name" => "Prince",
        "email" => "prince@gmail.com",
        "mobile" => "9876543211"
    ],
    [
        "id" => 3,
        "name" => "Manav",
        "email" => "manav@gmail.com",
        "mobile" => "9876543212"
    ]
];

echo $students[0]["name"];

echo "<hr>";
echo "<br>";

foreach($students as $student)
{
    echo "ID : " . $student["id"] . "<br>";
    echo "Name : " . $student["name"] . "<br>";
    echo "Email : " . $student["email"] . "<br><br>";
}


echo "<hr>";
echo "<br>";

//add the new element inside the array
$num=[1,2,3];
array_push($num,4);
print_r($num);

echo "<hr>";
echo "<br>";

//remove the element inside the array.
array_splice($num,-1);
print_r($num);

echo "<hr>";
echo "<br>";



?>

