<?php

if (isset($_POST['delete'])) {
    require_once("config.php");
    $id = $_POST['id'];
    $students = $conn->prepare("delete from students where id='$id'");

    if ($students->execute()) {
        echo "<br>";
        echo "delete the student";
    } else {
        echo "not delete the student";
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
        <input type="number" name="id" placeholder="Please enter id">
        <br><br>

        <button type="submit" name="delete">Delete record</button>
    </form>
</body>

</html>