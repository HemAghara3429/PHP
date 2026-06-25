<?php
//In PHP, include and require are used to insert the content of one PHP file into another PHP file.


// include statement includes and evaluates the specified file
include 'config.php';

// require statement includes and evaluates the specified file, but will produce a fatal error if the file is not found
require 'database.php';
?>