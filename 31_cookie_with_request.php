<form action="" method="post">
    <input type="text" name="user" placeholder="Enter Username">
    <br><br>

    <button name="button" value="set">Set Cookie</button>
    <br><br>

    <button name="button" value="display">Display Cookie</button>
    <br><br>

    <button name="button" value="delete">Delete Cookie</button>
</form>

<?php

if(isset($_POST['button']))
{
    $btn = $_POST['button'];

    if($btn == "set")
    {
        $user = $_POST['user'];

        setcookie("user", $user, time()+3600);

        echo "Cookie Set Successfully";
    }

    elseif($btn == "display")
    {
        if(isset($_COOKIE['user']))
        {
            echo "Username : ".$_COOKIE['user'];
        }
        else
        {
            echo "Cookie Not Found";
        }
    }

    elseif($btn == "delete")
    {
        setcookie("user", "", time()-3600);

        echo "Cookie Deleted Successfully";
    }
}

?>