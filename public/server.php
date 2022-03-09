<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
         h1 {
             color:blue;
         }

         h3 {
             color:red;
         }

         span {
             color: green;
         }
    </style>
</head>

<body>
    <?php
    //Start $_SERVER example
    echo '<h1>$_SERVER</h1>';

    foreach ($_SERVER as $key => $value) {
        echo "<h3> <span>$key</span> : $value </h3>";
    }
    ?>
</body>

</html>