<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
        }

        nav {
            color: #fff;
        }

        a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h1>hh</h1>
    <?php include('./inc/nav.php')  ?>
    <?php /*require('./inc/nav.php') */ ?>
    <?php /* include_once('./inc/navbar.php') */ ?>

    <?php /* require_once('./inc/navbar.php') */ ?>

    <!-- <?php /*require('./inc/navbar.php') */ ?> -->
    <h1 style="text-align: center;">Dashboard Content</h1>
    <div style="margin:20px">

        Dash BOard
    </div>
    <?php include('./inc/footer.php') ?>
</body>

</html>
