<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM favourite_tb join product_tb ON product_tb.product_id=favourite_tb.product_id ");

if(mysqli_num_rows($query)>0)
    {
      while($row_data=mysqli_fetch_assoc($query)){
          $response[]= $row_data;
      }
      
    }
   echo json_encode($response);
?>