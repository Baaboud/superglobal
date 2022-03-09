<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: blue;
            text-align: center;
        }

        h2 {
            text-align: center;
            color: red;
        }
    </style>
</head>

<body>
    <h1>$_SESSION</h1>
    <?php
    //Start $_SESSION example
    session_start();
    $_SESSION["baaboud_sission"] = "Baaboud Sission";
    echo "<h2>" . $_SESSION["baaboud_sission"] . "</h2>";
    ?>
</body>

</html>