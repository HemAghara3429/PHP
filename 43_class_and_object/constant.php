<?php

class ConstantDemo{
    const collagename="ADIT";
    const studentname="hem";


    function getcollagename(){
        echo "<br>";
        echo self::collagename;
    }

    function getstudentname(){
        echo "<br>";
        echo ConstantDemo::studentname;
    }
}

echo ConstantDemo::collagename;

$c1=new ConstantDemo();
$c1->getcollagename();
$c1->getstudentname();

?>