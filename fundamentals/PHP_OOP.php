<?php

class Person
{
    public $name;
    public $age;

    public function breath()
    {
        echo $this->name . ' is breathing!';
    }
}

$person = new Person();

$person->name = "John Doe";
$person->age = 35;

$person->breath();
