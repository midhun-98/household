<?php
include 'conn.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query =  "INSERT INTO login_tb(username,password,role)VALUES('$username','$password','supervisor')";
    $result=mysqli_query($conn,$query);
    $id=mysqli_insert_id($conn);

    $query1="INSERT INTO supervisor_tb(login_id,name,email,mobile,username,password)VALUES('$id','$name','$email','$mobile','$username','$password')";

    $result1=mysqli_query($conn,"INSERT INTO supervisor_tb(login_id,name,email,mobile,username,password)VALUES('$id','$name','$email','$mobile','$username','$password')");

    if($result&&$result1)
    {
        echo 'done';
    }
    else
    {
        echo 'fail';
    }
    
?>