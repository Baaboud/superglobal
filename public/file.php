<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form > * {
            font-size: 24px;
            margin-top: 10px;
        }

        h1,h2,h3 {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <h1>File</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <h2>Pictures:</h2>
        <input type="file" name="pictures[]" />
        <input type="file" name="pictures[]" />
        <input type="file" name="pictures[]" />
        <input type="submit" value="Send" />
    </form>
    <?php
    if (isset($_FILES["pictures"]["error"])) {
        echo "<h2>This file is uploded</h2>";
        foreach ($_FILES["pictures"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
                // basename() may prevent filesystem traversal attacks;
                // further validation/sanitation of the filename may be appropriate
                $name = basename($_FILES["pictures"]["name"][$key]);
                move_uploaded_file($tmp_name, "../data/$name");
                echo "<h3>$key: $name</h3>";
            }
        }
    }
    ?>
</body>

</html>