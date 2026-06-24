<?php

$host="localhost";
$username="root";
$password="";
$db="collage";

$conn=new mysqli($host,$username,$password,$db);

if($conn->connect_error){
    echo "connection failed";
}

echo "connection successfully";
echo "<br>";

$result=$conn->query("show tables")->fetch_all();
print_r($result);


?>