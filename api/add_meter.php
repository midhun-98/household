<?php
include 'conn.php';
$edit=$_GET['edit_id'];
$query=mysqli_query($conn,"SELECT * FROM user_tb where login_id='$edit'");

    
    $no=$_POST['num'];

    $query1=mysqli_query($conn,"UPDATE user_tb set meter_number='$no' where login_id='$edit'");
   
    if($query&&$query1)
    {
        echo 'done';
    }else
    {
        echo 'fail';
    }
?>