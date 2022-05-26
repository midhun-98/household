<?php
include 'conn.php';

    $id=$_POST['id'];  
    
    $query=mysqli_query($conn,"INSERT INTO cart_tb(product_id) VALUES ('$id')");

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