<?php

require_once("config.php");

$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();

$students = $getStudents->fetchAll(PDO::FETCH_ASSOC);

?>

<h2>Student List</h2>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Batch</th>
        <th>City</th>
        <th>Year</th>
    </tr>

    <?php

    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['id'] . "</td>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['course'] . "</td>";
        echo "<td>" . $student['batch'] . "</td>";
        echo "<td>" . $student['city'] . "</td>";
        echo "<td>" . $student['year'] . "</td>";
        echo "</tr>";
    }

    ?>

</table>