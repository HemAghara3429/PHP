<?php

//example 1 :print the 10 time code step by step:

for ($i=0; $i <=10 ; $i++) { 
 
 echo "code step by step <br>";

}

echo "<hr>";

//example 2:print 0 to 5:

for ($i=0; $i <=5 ; $i++) { 
    echo "$i ,";
}


echo "<hr>";

//example:3 print the reverse string .

$name = "hem";

for($i = strlen($name) - 1; $i >= 0; $i--){
    echo $name[$i];
}


//example:4 print the multiplication table.

echo "<hr>";

$table=10;

for($start=1;$start<=10;$start++){
    echo $start*$table;
    echo "<br>";
}

?>