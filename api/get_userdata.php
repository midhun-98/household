<?php
include 'conn.php';

$id=$_POST['id'];

$query=mysqli_query($conn,"SELECT * FROM user_tb where login_id='$id'");

    if(mysqli_num_rows($query)>0)
    {
      $row_data=mysqli_fetch_assoc($query);
      $response['message']='true';
      $response['name']=$row_data['name'];
      $response['email']=$row_data['email'];
    }
    else
    {
        $response['message']='false';
    }
    echo json_encode($response);
?>
