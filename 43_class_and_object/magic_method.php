<?php
// Magic methods are special methods in PHP that are automatically called in certain situations. They are prefixed with double underscores (__). Some common magic methods include __construct(), __destruct(), __get(), __set(), __call(), and more.

class Student {
    // Magic method __construct is called when an object is created
    public function __construct() {
        echo "Constructor called.<br>";
    }

    // Magic method __destruct is called when an object is destroyed
    public function __destruct() {
        echo "Destructor called.<br>";
    }
}

$student = new Student();
unset($student); // This will call the destructor


//_get() and __set() example.
//__get() is called when trying to access a property that doesn't exist, and __set() is called when trying to set a property that doesn't exist.
//__set() is used to set the value of a property that doesn't exist, and __get() is used to retrieve the value of a property that doesn't exist.

class Person {
    private $data = [];

    // Magic method __get is called when trying to access a property that doesn't exist
    public function __get($name) {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    // Magic method __set is called when trying to set a property that doesn't exist
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$p1=new Person();
$p1->name = "John"; // This will call __set()
echo $p1->name; // This will call __get()

echo "<br>";

//__call() example.
//__call() is called when trying to call a method that doesn't exist.

class Calculator {
    // Magic method __call is called when trying to call a method that doesn't exist
    public function __call($name, $arguments) {
        if ($name == 'add') {
            return array_sum($arguments);
        }
        return null;
    }
}

$calc = new Calculator();
echo $calc->add(5, 10, 15); // This will call __call() and return 30


echo "<br>";

//__tostring() example.
//__tostring() is called when an object is treated as a string.

class Book {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    // Magic method __tostring is called when an object is treated as a string
    public function __toString() {
        return "Book title: " . $this->title;
    }
}

$book = new Book("PHP Programming");
echo $book; // This will call __toString() and print "Book title: PHP Programming"
?>      