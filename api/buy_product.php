<?php
include 'conn.php';

    $id=$_POST['product_id'];  
    $user=$_POST['user_id'];
    $count=$_POST['count'];
    
        $query=mysqli_query($conn,"INSERT INTO booking_tb(product_id,user_id,count) VALUES ('$id','$user','$count')");
        if($query)
        {
        $response['message'] ='true';
        }
        else
        {
            $response['message']='false';
        }
    
	   echo json_encode($response);
?>
