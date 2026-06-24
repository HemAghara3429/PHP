<?php

class Animal{

public function animal(){
    echo "this is animal";
}
}


class Lion extends Animal{

public function Lion(){
    echo "this is Lion";
}
}

$child=new Lion();
$child->animal();
$child->Lion();





?>