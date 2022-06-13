<?php
session_start();
include 'conn.php';
$delete=$_POST['product_id'];
$query=mysqli_query($conn,"DELETE FROM cart_tb where product_id='$delete'");
if($query)
{
    $response['message']=true;
}
else
{
    $response['message']=false;
}
echo json_encode($response);
?>