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
         $sql="DELETE FROM exp WHERE item='$item'";
            if ($con->query($sql) === TRUE) 
            {
                echo "Item deleted";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
      
       
    }
?>