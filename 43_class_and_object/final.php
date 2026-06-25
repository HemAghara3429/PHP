<?php

final class Honda{

//final method cannot access insid the child class.
final function companyname(){
    echo "this is Honda company";
}

}


//final class cannot access because  declare as final class..

// class Car extends Honda{

// }
?>