<?php 
    session_start();
    echo 'Name: ' . $_SESSION['name'] . '<br>';
    echo 'password: ' . $_SESSION['password'] . '<br>';
    // echo 'Time: ' . $_SESSION['time'] . '<br>';
    echo 'Date: ' . $_SESSION['date'] . '<br>';
    echo '<a href="sample.php">Go to sample.php</a><br>';
    echo '<a href="destroy.php">Destroy Session</a>';


?>
