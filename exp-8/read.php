<?php 
  $con=new mysqli("localhost","root","","10th");

  if($con->connect_error){
    echo "connection error";
  }
  else{
    $result_array=array();
    $sql="SELECT * FROM crud ";
    $result=$con->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        
          array_push($result_array,$row);
      }
    }
    echo json_encode($result_array);
  }  
?>
