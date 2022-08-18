<?php
    setcookie('loggedin_email', "", [
        'expires' => time() - 3600, // 3600 sec = 1 hour
        'path' => '/',
        'domain' => '',
        'secure' => false,
        'httponly' => true, // JavaScript can not access it
        'samesite' => 'Lax',
    ]);
    setcookie('loggedin_type', "", [
        'expires' => time() - 3600, // 3600 sec = 1 hour
        'path' => '/',
        'domain' => '',
        'secure' => false,
        'httponly' => true, // JavaScript can not access it
        'samesite' => 'Lax',
    ]);
    session_destroy();
    header("Location:../view/home.php");
?>