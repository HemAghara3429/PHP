<?php
if (isset($_POST['submit'])) {
    require_once("config.php");
    echo "<br>";
    $search = $_POST['search'];
    $student = $conn->prepare(" SELECT * FROM students WHERE name LIKE '%$search%'");

    if ($student->execute()) {
        echo "data are found inside the database";
    } else {
        echo "data are not found inside the database";
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

        <input type="text" name="search" placeholder="Enter Student Name">
        <br><br>

        <button type="submit" name="submit">
            Search
        </button>

    </form>

</body>

</html>