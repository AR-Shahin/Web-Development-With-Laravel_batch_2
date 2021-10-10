<?php

$users = ['a@mail.com', 'b@mail.com'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (!empty($name)) {
        echo "Name is : $name <br>";
    } else {
        echo "empty name <br>";
    }
    if (!empty($email)) {
        echo "email is : $email";
    } else {
        echo "empty email";
    }

    // check in database
    if (emailExitsOrNot($email)) {
        echo "<br>Valid User";
    } else {
        echo "<br>Invalid User";
    }
}


function emailExitsOrNot($email): bool
{
    // foreach ($GLOBALS['users'] as $user) {
    //     if ($user === $email) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    if (in_array($email, $GLOBALS['users'])) {
        return true;
    } else {
        return false;
    }
}
