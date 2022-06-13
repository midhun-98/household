<?php
include 'conn.php';
$id=$_POST['id'];
$query=mysqli_query($conn,"SELECT * FROM booking_tb join product_tb ON product_tb.product_id=booking_tb.product_id where booking_tb.user_id='$id'");

if(mysqli_num_rows($query)>0)
    {
      while($row_data=mysqli_fetch_assoc($query)){
          $response[]= $row_data;
      }
      
    }
   echo json_encode($response);
?>