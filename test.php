<?php
include 'conn.php';

$id=$_POST['id'];
$p_no = $_POST['meter_number'];
$complaint=$_POST['complaint'];

$query1=mysqli_query($conn,"INSERT INTO complaint_tb(complaint,post_number)VALUES('$complaint','$p_no')");
$data =mysqli_query($conn,"SELECT * FROM complaint_tb where post_number='$p_no'");


if($query1)
    {
      while($row_data=mysqli_fetch_assoc($data)){
          $arr['post']=$row_data['post_number'];     
      }
      
    }
    else{
        $arr['message']= 'failed';
    }
    echo json_encode($arr);
  
?>
