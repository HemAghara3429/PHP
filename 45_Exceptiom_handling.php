<?php

$a = 10;
$b = 0;

try {
    if ($b == 0) {
        throw new Exception("Division by zero error");
    }

    echo $a / $b;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "This block will always execute";
}


?>