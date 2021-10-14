<?php

session_start();
if ($_SESSION['email'] && $_SESSION['auth']) {
    //header('location: ./index.php');
    header('location: ./dashboard.php');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $users = ['a@mail.com', 'b@mail.com'];

    if (in_array($email, $users)) {
        $_SESSION['email'] = $email;
        $_SESSION['auth']  = true;
        header('location: ./dashboard.php');
    } else {
        echo ("Invalid Users!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="email" name="email">
        <input type="submit">
    </form>
</body>

</html>
