<?php 
    session_start();
    if(isset($_POST['start_session'])){
    $_SESSION["name"] = $_POST["username"];
    $_SESSION["pas"] = $_POST["password"];
    
    date_default_timezone_set('Asia/Kolkata');
    
    $_SESSION["date"] = date("d-m-Y");
    $_SESSION["time"] = date("h:i:s a");

    // if($_SESSION["name"] != null and $_SESSION["pas"] != null){
    echo "<h2>Session variables are set.</h2>";
    header('refresh:3;url = redirect.php');
    // }
    // else
    // echo "<a href='http://localhost/exp7/session/index.php'>Kindly provide name and password</a>";
}
?>