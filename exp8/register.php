<?php 
    if(isset($_POST['register'])){
        $conn = mysqli_connect('localhost','root','','practice');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO exp8(username,password) VALUES('$username','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Registered successfully";
        }
        else{
            echo "Registration failed";
        }
    }
?