<?php

class Properties
{

    public $name = "hem Aghara";

    function getName()
    {
        echo $this->name;
    }

    function updateName()
    {
        $this->name = "patel";
    }
}

$p1 = new Properties();
$p1->updateName(); //update name
$p1->getName(); //get name


?>
