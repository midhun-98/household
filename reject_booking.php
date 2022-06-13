<?php
session_start();
include 'conn.php';
$reject=$_GET['reject_id'];
mysqli_query($conn,"UPDATE booking_tb SET status='Out of stock'  where id='$reject'");
header('location:view_order.php');
?>