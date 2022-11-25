<?php 
    if(isset($_GET['login'])){
        // require_once("database.php");
        $conn = mysqli_connect('localhost','root','','practice');
        $username = $_GET['username'];
        $password = $_GET['password'];
        $sql = "SELECT * FROM exp8 WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            echo "Welcome $username";
        }
        else{
            echo "Login failed<br>";
            echo "Click below to register<br>";
            echo "<a href='reg.html'>Register</a>";
        }
    }
?>
