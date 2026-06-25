<?php

class Honda {
  
    //must be decalre as static keyword.
    static $carname = "BMW";

    static function companyname() {
        echo "Honda";
    }
}

// Access static method without creating object
Honda::companyname();

echo "<br>";

// Access static property without creating object
echo Honda::$carname;

?>