<?php

if(isset($_FILES['photo'])){
    $fileName = $_FILES['photo']['name'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // Specify the directory where you want to save the uploaded photo
    $uploadDir = "uploads/";

    // Create the uploads directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Move the uploaded file to the specified directory
    if(move_uploaded_file($tmpName, $uploadDir . $fileName)){
        echo "Photo uploaded successfully!";
    } else {
        echo "Failed to upload photo.";
    }
}

?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" accept="image/*">
    <input type="submit" value="Upload Photo">
</form>