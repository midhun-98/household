<?php
session_start();
include 'conn.php';
$product=$_POST['product_id'];
$user=$_POST['user_id'];
$query=mysqli_query($conn,"DELETE FROM favourite_tb where product_id='$product' AND user_id='$user'");
if($query)
{
    echo 'true';
}
else
{
    echo 'false';
}
?>