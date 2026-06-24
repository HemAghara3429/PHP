<?php
//class create MathOperation.
class MathOperation
{
     
   public $value=50;   //value variable assign as public variable

    //sum method
    function sum()
    {
        echo 10 + 20+ $this->value;   //valaue variable use the value here 
    }

    //addition method
    function addition($a, $b)
    {
        echo $a + $b;
    }
}

$maths = new MathOperation(); //here create the object
$maths1=new MathOperation();  //here create the multiple object of one class...

$maths->sum();

echo "<br>";

$maths->addition(10, 100);  //method with parameter

echo "<br>";

$maths1->addition(2,2);   //here access the method object2 here access the any method.

echo "<br>";


?>