<?php

//print the number....

for($i = 1; $i <= 3; $i++) {

    for($j = 1; $j <= 3; $j++) {
        echo "$i$j ";
    }

    echo "<br>";
}

//print a square pattern 


echo "<hr>";

for($i = 1; $i <= 5; $i++) {

    for($j = 1; $j <= 5; $j++) {
        echo "* ";
    }

    echo "<br>";
}


//Right Triangle Pattern

echo "<hr>";

for($i = 1; $i <= 5; $i++) {

    for($j = 1; $j <= $i; $j++) {
        echo "* ";
    }

    echo "<br>";
}

?>