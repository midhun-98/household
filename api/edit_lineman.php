<?php
include 'conn.php';
$edit=$_GET['edit_id'];
$query=mysqli_query($conn,"SELECT * FROM lineman_tb where login_id='$edit'");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $query="UPDATE lineman_tb set name='$name',email='$email',mobile='$mobile' where login_id='$edit'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        echo 'done';
    }
    else
    {
        echo 'fail';
    }
   
?>