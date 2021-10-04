<?php
// include('another.php');
// echo $GLOBALS['x'] . PHP_EOL;

function myFunc()
{
    $GLOBALS['p'] = 100;
    echo $GLOBALS['p'];
}


// myFunc();
// echo PHP_EOL .  $p;
// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";

// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo $_SERVER['REQUEST_METHOD'];

$nameErr = $passErr = $genErr = "";
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_REQUEST['name']);
    $password = test_input($_REQUEST['password']);
    $gender = $_REQUEST['gender'];
    if (empty($name)) {
        $nameErr = 'Name Field is Empty!';
    }
    if (empty($password)) {
        $passErr = 'Password Field is Empty!';
    }
    if (empty($gender)) {
        $genErr = 'gender Field is Empty!';
    }

    if (!empty($name) && !empty($password) && !empty($gender)) {
        if (!custom_in_array($name)) {
            echo "Invalid Name";
        } else {
            echo "Name : $name <br>";
            echo "Password : $password <br>";
            echo "Gender :  $gender <br>";
        }
    }
}

function test_input($data)
{
    return $data;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkName($data): bool
{
    $names = ['shahin', 'omi'];

    foreach ($names as $name) {
        if ($name === $data) {
            return true;
        } else {
            return false;
        }
    }
}
function custom_in_array($name)
{
    $names = ['shahin', 'omi'];

    if (in_array($name, $names)) {
        return true;
    } else {
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br> <br>
        <input type="password" name="password">
        <span class="error">* <?php echo $passErr; ?></span>
        <br><br>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <span class="error">* <?php echo $genErr; ?></span>
        <br> <br>
        <input type="submit">
    </form>
    <!-- <a href="index.php?value=123&query=abc">GET</a> -->
</body>

</html>
