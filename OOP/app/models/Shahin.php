<?php

class Shahin extends User
{
    // public function printName(): string
    // {
    //     return 'Shain Class  ' . $this->name;
    // }
    public $email;
    function __construct($name, $email)
    {
        parent::__construct($name);
        $this->email = $email;
    }
}
