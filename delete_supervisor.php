<?php
session_start();
include 'conn.php';
$delete=$_GET['delete_id'];
mysqli_query($conn,"DELETE FROM supervisor_tb where login_id='$delete'");
mysqli_query($conn,"DELETE FROM login_tb where login_id='$delete'");
header('location:view_supervisor.php');
?>