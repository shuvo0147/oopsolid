<?php
abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    // Abstract method
    abstract public function makeSound();
    
    // Concrete method
    public function sleep() {
        echo $this->name . " is sleeping.";
    }
}

// Concrete class extending the abstract class

class Dog extends Animal {
    
    public function __construct($name) {
        parent::__construct($name);
    }
    
    public function makeSound() {
        echo $this->getName() . " says Woof!";
    }
}

$dog = new Dog('dog');
echo $dog->getName();
echo "<br>";

abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro();

    
}


class Audi extends Car
{
    public function intro()
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

$audi = new Audi('Audi');
echo $audi->intro();
echo "<br>";
