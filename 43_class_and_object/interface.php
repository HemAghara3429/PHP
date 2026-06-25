<?php
//decalre as interface
interface school {

//here cannot decalre as private method
//here all method are must be implements in other class.
//here cannot decalre the variable only use for the method.
    public function StudentMark();
    public function StudentResult();
}

class student implements school {
//here method can be access.
    public function StudentMark() {
        echo "Here show the student mark";
    }

    public function StudentResult() {
        echo "Here show the student result";
    }
}

$s1 = new student();
$s1->StudentMark();

echo "<br>";

$s1->StudentResult();

?>