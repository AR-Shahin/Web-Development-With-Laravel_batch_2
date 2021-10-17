<?php

class User
{
    public $name;
    protected $email;
    private $password;
    const TEST = 'I am from constant';
    const PI = 3.1416;
    // public function __construct($n, $e)
    // {
    //     $this->name = $n;
    //     $this->email = $e;
    // }
    // public function __destruct()
    // {
    //     echo '<br>' . "I am from destructor";
    // }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    function sayHello()
    {
        return "Hello " . $this->getName();
    }

    function __invoke()
    {
        echo '<br>' . "I am from invoke function";
    }

    function useConstant()
    {
        return self::TEST;
    }

    function usePI()
    {
        return self::PI;
    }
}


// Object Creation 

// (new User())();

// $obj->setName('Arif');
// echo $obj->getName();
// echo "<br>";

// echo $obj->sayHello();

echo User::TEST;
echo "<br>";
$ob = new User();
echo $ob->useConstant();
