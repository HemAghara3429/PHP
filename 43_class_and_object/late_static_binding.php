<?php

class CountrySale{
    static public $totalsale=1000;
}

class CitySale{
    static public $totalsale=50;

    function getTotalSale(){
        echo static::$totalsale;
    }
}

$city=new CitySale();
$city->getTotalSale();

?>