<?php
header ('Strict-Transport-Security: max-age=31536000');
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    echo "Sorry you need to be authorized to access";
    exit();
} else {
    if (($_SERVER['PHP_AUTH_USER'] == "alessio") && ($_SERVER['PHP_AUTH_PW'] == "123")) {
        include_once 'src/auth/oauth2.php';
    } else {
        echo "Wrong credentials";
    }
}