<?php 
    echo "welcome to the session demo <br>";
    session_start();
    echo 'Name: ' . $_SESSION['name'] . '<br>';
?>