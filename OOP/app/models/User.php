<?php

abstract class User
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function display();

    public function sayHello()
    {
        echo "Hello $this->name";
    }
}

interface UserInterface
{
    public function display();
    public function sayHello();
}


interface anotherInterFace
{
    public function another();
}
