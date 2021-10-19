<?php

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    // function __get($parms)
    // {
    //     echo $parms . " Doesn't Exist!";
    // }

    // function __set($parms, $value)
    // {
    //     echo $parms . " value is " . $value;
    // }

    // public function hello(): void
    // {
    //     echo "Hello " . $this->name;
    // }

    // function __call($name, $arguments)
    // {
    //     // var_dump($arguments);
    //     echo "$name" .  " doesn't exitst" . 'args ' . $arguments[0];
    // }

    // public static function __callStatic($name, $arguments)
    // {
    //     echo "$name" .  " doesn't exitst" . 'args ' . $arguments[0];
    // }
    // public function hello(): void
    // {
    //     echo "Hello " . $this->name;
    // }

    // public static function hi($name)
    // {
    //     echo "Hi " . $name;
    // }

    // public static function another($name)
    // {
    //     self::hi($name);
    // }
    public function test()
    {
        echo "Test Public Function";
    }
    final public function printName(): string
    {
        return 'Hey ' . $this->name;
    }
}
