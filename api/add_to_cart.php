<?php
include 'conn.php';

    $id=$_POST['product_id'];  
    $user=$_POST['user_id'];
    
   $query=mysqli_query($conn,"SELECT * FROM cart_tb where product_id='$id' AND user_id='$user'");

    if(mysqli_num_rows($query)>0)
    {
        $response['message']= 'false';
    }
    else
    {
        $query1=mysqli_query($conn,"INSERT INTO cart_tb(product_id,user_id) VALUES ('$id','$user')");
        if($query1)
        {
        $response['message'] ='true';
        }
        else
        {
            $response['message']='false';
        }
    }
    
	   echo json_encode($response);
?>
