<?php
session_start();
include 'conn.php';
$delete=$_GET['delete_id'];
mysqli_query($conn,"DELETE FROM product_tb where product_id='$delete'");
header('location:view_product.php');
?>