<?php

require_once './app/models/User.php';
require_once './app/models/Shahin.php';

// $usr = new User();

// echo $usr->name;
// echo "<br>";
// echo $usr->email;
// echo "<br>";
// echo $usr->password;

// $usr->hi(10);

// User::hfsl('Arif');

$sh = new Shahin('Shahin', 's@mail.com');

echo $sh->printName();
