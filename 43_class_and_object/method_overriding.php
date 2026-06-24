<?php

//parent class.
class ParentClass
{
    public function message()
    {
        echo "Message from Parent Class";
    }
}

//child class.
class ChildClass extends ParentClass
{
    public function message()
    {
        echo "Message from Child Class";
    }
}

$obj = new ChildClass();

$obj->message();

?>