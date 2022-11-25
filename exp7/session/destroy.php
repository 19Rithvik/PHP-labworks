<?php 
    session_start();
    session_destroy();
    echo '<h3>Session destroyed.</h3>';
    header('refresh:3;url= index.html');
?>