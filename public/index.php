<!-- $Global -->
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
    <h1>$GLOBALS</h1>
    <?php
    //Start $GLOBALS example
    $scope = "Global Variable";
    function test()
    {
        $scope = "Local variable";
        echo '<h2>$sope in global scope: ' . $GLOBALS["scope"] . "</h2>";
        echo '<h2>$socpe in current scope: ' . $scope . "</h2>";
    }
    test();
    ?>
</body>

</html>