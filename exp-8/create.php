<?php
   $con=new mysqli('localhost','root','','10th');
    

    if($con->connect_error)
    {
         echo "ERRROR";
    }
    else
    {
          $item=$_POST['pitem'];
          $sql="INSERT INTO crud(item) VALUES('$item')";
          $result=$con->query($sql);
          if($result === TRUE){   
            echo "new item is added";
          }
          else{
            echo"Error in php";
          }

    }
    
?>