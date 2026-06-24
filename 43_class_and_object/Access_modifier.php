<?php

class Student
{
  // Public Method
  public function StudentName()
  {
    echo "I am Student <br>";
  }

  public function StudentSchool()
  {
    echo "Student School Name <br>";
    $this->StudentName();
  }

  // Private Method
  private function Login()
  {
    echo "Student Login <br>";
  }

  // Protected Method
  protected function StudentMark()
  {
    echo "This is Student Mark <br>";
  }
}

class Management extends Student
{
  public function ReviewExam()
  {
    $this->StudentMark();
  }
}

$s1 = new Student();

$s1->StudentName();
$s1->StudentSchool();

$m1 = new Management();
$m1->ReviewExam();
