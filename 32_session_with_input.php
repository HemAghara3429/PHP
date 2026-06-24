<?php
session_start(); // Start session before HTML

if(isset($_POST['button'])){

    if($_POST['button'] == "set"){
        $_SESSION['user'] = $_POST['user'];
        echo "Session Set Successfully";
    }

    if($_POST['button'] == "get"){
        if(isset($_SESSION['user'])){
            echo "Session Value: " . $_SESSION['user'];
        }else{
            echo "Session Not Found";
        }
    }

    if($_POST['button'] == "delete"){
        session_unset();
        session_destroy();
        echo "Session Deleted Successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="user" placeholder="Please enter name">
        <br><br>

        <button name="button" value="set">Set Session</button>
        <button name="button" value="get">Get Session</button>
        <button name="button" value="delete">Delete Session</button>
    </form>

</body>
</html>