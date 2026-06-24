<?php


if(isset($_POST['file'])){
    
$fileName=$_POST['file'];
$content=$_POST['content'];
$file=fopen($fileName,"w");    //fopen is inbulit function here perform the write operation..
fwrite($file,$content);   //perform the write operation.....
fclose($file); //close the file
echo "file created";
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
        <input type="text" name="file" placeholder="enter the file name">
        <br><br>

        <textarea name="content" id="">

        </textarea>

        <br><br>
        <button>create file</button>
    </form>
</body>
</html>