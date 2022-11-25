<?php 
   $con=new mysqli("localhost","root","","wt");
   if($con->connect_error)
   {
       echo $con->connect_error;
       die("Failed to Connect");
   }
   else
   {
    //    echo "Connection Established";
      $result_array=array();
      $sql='SELECT * FROM sample';
      $result=$con->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
               array_push($result_array,$row);
            }
        }
 echo json_encode($result_array);
       
    }


?>