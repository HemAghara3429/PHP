<?php

$age = 22;
$welcome = "Great!";
$sorry = "Sorry, you cannot vote in the election.";

if ($age >= 18) {
    echo "You can vote in the election. " . $welcome;
} else {
    echo $sorry;
}

?>