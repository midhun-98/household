<?php
session_start();
include 'conn.php';
$accept=$_GET['accept_id'];
mysqli_query($conn,"UPDATE booking_tb SET status='2'  where product_id='$accept'");
header('location:view_order.php');
?>