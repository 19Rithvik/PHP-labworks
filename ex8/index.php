<?php 
   $con=new mysqli("localhost","root","","wt");//create connecton with db
   if($con->connect_error)
   {
       echo $con->connect_error;
       die("Failed to Connect");
   }
   else
   {
    //    echo "Connection Established";
       $name=$_POST['username'];//to get value from post method
       $pass=$_POST['password'];

       $sql="INSERT INTO sample(username,password) VALUES('$name','$pass')";
      
     //TO CHECK IF INSERTED OR NOT 
     if ($con->query($sql) === TRUE) {
        echo "New record created successfully in the Database";
      }
       else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
      
       
    }


?>