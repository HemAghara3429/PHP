<?php

if(isset($_FILES['file'])){

    $tmpFile = $_FILES['file']['tmp_name'];

    $myfile = fopen($tmpFile, "r");

    echo "<h3>File Content:</h3>";
    echo nl2br(fread($myfile, filesize($tmpFile)));

    fclose($myfile);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="file">
    <br><br>

    <button type="submit">Read File</button>

</form>

</body>
</html>