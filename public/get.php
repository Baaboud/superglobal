<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form > * {
            font-size: 26px;
        }
        h2 {
            text-align: center;
            color: red;
        }
    </style>
</head>

<body>
    <h1 style="color:blue; text-align: center;">$_GET</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="text-align: center;">
        <input type='text' name='name' id=''>
        <input type='submit' value='send'>
    </form>
    <?php
    if (isset($_GET['name'])) {
        echo "<h2>" . $_GET['name'] . "</h2>";
    }
    ?>
</body>

</html>