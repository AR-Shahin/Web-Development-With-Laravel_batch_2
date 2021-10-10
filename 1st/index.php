<?php

$a = 10;
$b = 20;

function sum()
{
    // global $a, $b;
    $result = $GLOBALS['a'] + $GLOBALS['b'];
    echo "result  = $result <br><br>";
}
// sum();

# SERVER

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_PORT'];
?>

<!-- <?php
        /*
        if ($_SERVER['REQUEST_METHOD'] == 'post') {
            $name = $_REQUEST['username'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo 'Your name is ' . $name;
            }
        } */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="">Enter Name</label>
        <input type="text" name="username"> <br><br>
        <input type="submit" value="Submit">
        <button type="submit">Submit</button>
    </form>
</body>

</html> -->
<html>

<body>

    <form method="POST" action="./another.php">
        Name: <input type="text" name="name"> <br><br>

        Email: <input type="text" name="email" value=""> <br><br>
        <!-- Password: <input type="text" name="password"> <br><br> -->
        <input type="submit">
    </form>

    <?php
    /*
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // // collect value of input field
        // // $name = $_REQUEST['fname'];
        // // $email = $_REQUEST['email'];

        // // $name = $_POST['name'];
        // // $email = $_POST['email'];
        // $name = $_GET['name'];
        $email = $_GET['email'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
            echo "<br>" . $email;
        }
    }*/
    ?>

</body>

</html>
