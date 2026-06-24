<?php

if (isset($_POST['name'])) {
    require_once("config.php");

    echo "<br>";
    echo "<br>";

    
    $name=$_POST['name'];
    $course=$_POST['course'];
    $batch=$_POST['batch'];
    $city=$_POST['city'];
    $year=$_POST['year'];
    


    $student = $conn->prepare("INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')");
    $result = $student->execute();

    if ($result) {
        echo "Data Insert into Database";
    } else {
        echo "Data Not Insert into Database";
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
        <input type="text" name="name" placeholder="Please enter Name">
        <br><br>

        <input type="text" name="course" placeholder="Please enter course">
        <br><br>

        <input type="text" name="batch" placeholder="Please enter batch">
        <br><br>

        <input type="text" name="city" placeholder="Please enter city">
        <br><br>

        <input type="text" name="year" placeholder="Please enter year">
        <br><br>

        <button>Submit</button>
    </form>
</body>

</html>