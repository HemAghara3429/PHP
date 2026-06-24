<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "collage";

try {

    $conn = new PDO(
        "mysql:host=$host;dbname=$db",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection Done";

} catch (PDOException $err) {

    echo "Connection Failed: " . $err->getMessage();
}

?>