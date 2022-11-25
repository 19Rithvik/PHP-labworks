<?php
  $con=new mysqli("localhost","root","","10th");
  if($con->connect_error){
    echo "Error";
  }
  else{
    $item=$_POST['pitems'];
    $sql="DELETE  FROM crud WHERE  item='$item'";
    $result=$con->query($sql);
    if($result===TRUE){
      echo "item is deleted";
    }
  }


?>