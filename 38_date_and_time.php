<?php

date_default_timezone_set("Asia/Kolkata");

echo "Date : " . date("d-m-Y");
echo "<br>";

echo "Time : " . date("H:i:s");
echo "<br>";

echo "Day : " . date("l");
echo "<br>";

echo "Month : " . date("F");
echo "<br>";

echo "Year : " . date("Y");
echo "<br>";

echo strtotime("25 December 2026");  //Convert String Date to Timestamp
echo "<br>";

echo date("d/F/Y"); //Format Custom Date
echo "<br>";

?>