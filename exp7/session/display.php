<?php 
    session_start();
    echo "<h2>Welcome to the session demo</h2>"."<br>";
    echo "<div class=fonts>";
    echo 'Name: ' . $_SESSION['name'] . '<br>';
    echo "</div>";
    echo "<style>";
    echo ".fonts { font-weight:bolder; font-size:30px}";
    echo "</style>";
?>

