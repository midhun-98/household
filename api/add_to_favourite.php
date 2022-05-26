<?php
include 'conn.php';

    $id=$_POST['id'];  
    $user=$_SESSION['user_id'];
    
    $query=mysqli_query($conn,"INSERT INTO favourite_tb(product_id) VALUES ('$id','$user')");

    if($query)
    {
        $response['message']= 'true';
    }
    else
    {
        $response['message'] ='fail';
    }
	   echo json_encode($response);
?>