<?php

   $con=new mysqli("localhost","root","","wt");
   if($con->connect_error)
   {
       echo $con->connect_error;
       die("Failed to Connect");
   }
   else
   {
         $item=$_POST['itemname'];
         $sql="INSERT INTO exp(item) VALUES('$item')";
            if ($con->query($sql) === TRUE)
            {
                echo "New Item added";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
    }
?>