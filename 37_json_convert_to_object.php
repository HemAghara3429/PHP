<?php

$json = '{"name":"Hem","age":21}';

$obj = json_decode($json);

echo $obj->name;
echo "<br>";
echo $obj->age;

?>