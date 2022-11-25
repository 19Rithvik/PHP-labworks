<?php 
    session_start();
    session_destroy();
    //destroy cookie
    setcookie('PHPSESSID', '', time() - 3600, '/');
    setcookie('time', '', time() - 3600, '/');
    unset($_COOKIE['PHPSESSID']);
    unset($_COOKIE['time']);

    echo 'Session destroyed.';
    header('Location: index.php');
?>