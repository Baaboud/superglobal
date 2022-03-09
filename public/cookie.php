<?php
//Start $_COOKIE example
echo '<br> <br> <br> <h1 style="color:blue; text-align:center;">$_COOKIE</h1>';
setcookie("cookie[one]", "cookieone");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[three]", "cookiethree");
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        echo "<h2 style='text-align:center'>$name : $value </h2>\n";
    }
}