<?php

setcookie("fruit", "apple", time() + (86400));

print_r($_COOKIE);  //print the cookie

echo "<br>";
echo "<br>";

if (isset($_COOKIE['fruit'])) {
    echo "cookie set";

    echo "<br>";
    echo "<br>";

    echo "current cookie is: " . $_COOKIE['fruit'];
} else {
    echo "cookie is not set";
}
