<?php
include 'conn.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($conn,"INSERT INTO login_tb(username,password,role)VALUES('$username','$password','lineman')");
    $id=mysqli_insert_id($conn);

    $query1=mysqli_query($conn,"INSERT INTO lineman_tb(login_id,name,email,mobile,username,password)VALUES('$id','$name','$email','$mobile','$username','$password')");
 

    if($query&&$query1)
    {
        echo 'done';
    }else
    {
        echo 'fail';
    }

?>