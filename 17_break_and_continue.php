<?php



for ($start = 1; $start <= 10; $start++) {

    echo $start;
    echo "<br>";

    if ($start == 5) {
        echo "stop the loop";
        break;
    }
}

echo "<hr>";


for ($start = 1; $start <= 10; $start++) {

    if ($start == 5) {
        continue;
    }

    echo $start;
    echo "<br>";
}
