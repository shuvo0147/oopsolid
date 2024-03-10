<?php
interface Animal
{
    public function makeSound($sound);
    public function getName($name);
}

class Cat implements Animal
{
    public $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    public function getName($name)
    {
        echo $name . ' ' . $this->color;
    }

    public function makeSound($sound)
    {
        echo $sound . ' ' . $this->color;
    }
}

$animal = new Cat('White');
echo $animal->makeSound('Meow');
echo "<br>";
echo $animal->getName('Cat');
