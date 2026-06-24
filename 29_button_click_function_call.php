<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Call</title>
</head>

<body>

    <form action="" method="post">

        <button type="submit" name="button" value="btn1">
            Function Call
        </button>

        <br><br>

        <input
            type="text"
            name="username"
            placeholder="Please enter username">

        <button type="submit" name="submit" value="submit">
            Submit
        </button>

    </form>

</body>

</html>

<?php

// Function 1
function btn_click_test()
{
    echo "<h3>Button Click Function Called</h3>";
}

// Function 2
function greet($name)
{
    echo "<h3>Welcome " . $name . "</h3>";
}

// First Button
if (isset($_POST['button'])) {
    btn_click_test();
}

// Second Button
if (isset($_POST['submit'])) {
    greet($_POST['username']);
}

?>