<?php
  $con=new mysqli("localhost","root","","10th");
  if($con->connect_error){
    echo"error";
  }
  else{
    $item=$_POST['pitems'];
    $uitem=$_POST['puitems'];
    $sql="UPDATE crud SET item='$uitem' WHERE item='$item' ";
    $result=$con->query($sql);
    if($result===TRUE){
      echo "update";

    }
  }


?>