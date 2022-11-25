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
         $new=$_POST['new'];
         $sql="UPDATE exp SET item='$new' WHERE item='$item'";
            if ($con->query($sql) === TRUE) 
            {
                echo "Item Updated";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
      
       
    } 

?>