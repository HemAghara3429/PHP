<?php

require_once("config.php");

echo "<br>";
echo "<br>";

$getStudent = $conn->prepare("SELECT id, name FROM students");
$getStudent->execute();
$studentData = $getStudent->fetchAll(PDO::FETCH_ASSOC);

echo "<select>";

foreach ($studentData as $x) {
    echo "<option value='".$x['id']."'>".$x['name']."</option>";
}

echo "</select>";

?>