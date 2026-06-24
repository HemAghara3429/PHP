<?php

if (isset($_POST['submit'])) {
    require_once("config.php");

    echo "<br>";

    $id = $_POST['id'];
    $name = $_POST['name'];

    $student = $conn->prepare("UPDATE `students` SET `name` = '$name' WHERE `students`.`id` = '$id'");

    if ($student->execute()) {
        echo "data update successfully";
    } else {
        echo "data are not update successfully";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="id" placeholder="please enter id">
        <br><br>

        <input type="text" name="name" placeholder="enter the name">
        <br><br>

        <button type="submit" name="submit">Update Data</button>
    </form>
</body>

</html>