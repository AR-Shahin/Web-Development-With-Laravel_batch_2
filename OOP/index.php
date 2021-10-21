<?php

require_once './app/models/User.php';
require_once './app/models/Person.php';
// class Admin extends User
// {
//     public function display()
//     {
//         echo "hello";
//     }
// }

// class Customer extends User
// {
//     public function display()
//     {
//         echo "I am From  " . __CLASS__ . " Class";
//     }
// }
// $admin = new Admin('Shahin admin');
// $customer = new Customer('Shahin Customer');
// $admin->display();
// echo "<br>";
// $customer->display();


// class Admin implements UserInterface
// {
//     public function display()
//     {
//         echo "I am from Admin Class";
//     }
//     public function sayHello()
//     {
//         echo "Hello $this->name";
//     }

//     public function anotherFunction()
//     {
//         echo "Another";
//     }
// }

// class Customer implements UserInterface, anotherInterFace
// {
//     public function display()
//     {
//         echo "From Customer Class";
//     }
//     public function sayHello()
//     {
//         echo "Hello $this->name";
//     }

//     public function anotherFunction()
//     {
//         echo "Another";
//     }
//     public function another()
//     {
//         return 2;
//     }
// }

// $admin = new Admin('Admin');

// $customer = new Customer('Customer');

// $admin->display();
// echo "<br>";
// $customer->display();


// class English implements greatInterface
// {
//     public function great()
//     {
//         echo "<br>";
//         echo "Hello";
//         echo "<br>";
//     }
// }

// class German implements greatInterface
// {
//     public function great()
//     {
//         echo "<br>";
//         echo "Hallo";
//         echo "<br>";
//     }
// }

// class Hindi implements greatInterface
// {
//     public function great()
//     {
//         echo "<br>";
//         echo "Hindi Hello";
//         echo "<br>";
//     }
// }


// $eng = new English();
// $hi = new Hindi();
// $ge = new German();


// function allGreatings($greatins)
// {
//     foreach ($greatins as $g) {
//         $g->great();
//     }
// }
// allGreatings([$eng, $hi, $ge]);


trait A
{
    public function aClass()
    {
        echo "A Class";
    }
}


trait B
{
    public function bClass()
    {
        echo "B Class";
    }
}
trait D
{
    public function dClass()
    {
        echo "D Class";
    }
}

class C
{
    use A, B, D;
    public function cClass()
    {
        echo "C Class";
    }
}

$ob = new C;
$ob->aClass();
