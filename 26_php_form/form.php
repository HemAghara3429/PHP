<?php

print_r($_POST);
echo "<hr>";

if(isset($_POST['name'])){

    echo "User Name is: " . $_POST['name'];
    echo "<br>";

    echo "User Email is: " . $_POST['email'];
    echo "<br>";

    echo "User Password is: " . $_POST['password'];
    echo "<br>";

    echo "User Skill is: " . implode(", ", $_POST['skills']);
    echo "<br>";

    echo "User Gender is: " . $_POST['gender'];
    echo "<br>";

    echo "User City is: " . $_POST['city'];
    echo "<br>";

    echo "User Bio is: " . $_POST['bio'];
    echo "<br>";
}
?>