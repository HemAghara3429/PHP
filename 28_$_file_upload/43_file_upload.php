<?php

if(isset($_POST['upload']))
{
    $fileName = $_FILES['file']['name'];

    $tmpName = $_FILES['file']['tmp_name'];

    move_uploaded_file(
        $tmpName,
        "upload/".$fileName
    );

    echo "File Uploaded Successfully";
}

?>

<form method="post" enctype="multipart/form-data">

    <input type="file" name="file">

    <br><br>

    <button type="submit" name="upload">
        Upload
    </button>

</form>