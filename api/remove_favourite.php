<?php
session_start();
include 'conn.php';
$delete=$_POST['id'];
$query=mysqli_query($conn,"DELETE FROM favourite_tb where product_id='$delete'");
if($query)
{
    echo 'true';
}
else
{
    echo 'false';
}
?>