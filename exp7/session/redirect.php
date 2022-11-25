<?php 
    session_start();
    echo "<div class=aligncetner>";
    echo 'Name: ' . $_SESSION['name'] . '<br>';
    echo 'password: ' . $_SESSION['pas'] . '<br>';
    echo 'Time: ' . $_SESSION['time'] . '<br>';
    echo 'Date: ' . $_SESSION['date'] . '<br>'.'<br><br>';
    echo '<a href="display.php">Go to display</a><br><br>';
    echo '<a href="destroy.php">Destroy Session</a>';
    echo "</div>";
    echo "<style>";
    echo ".aligncetner { text-align:center;}";
    echo "</style>";

?>
