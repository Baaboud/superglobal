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
    <h1 style="color:blue; text-align: center;">$_POST</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="text-align: center;">
        <input type='text' name='name' id=''>
        <input type='submit' value='send'>
    </form>
    <?php
    if (isset($_POST['name'])) {
        echo "<h2>" . $_POST['name'] . "</h2>";
    }
    ?>
</body>

</html>