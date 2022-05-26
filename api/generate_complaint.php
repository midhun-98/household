<?php
include 'conn.php';

    $date=$_POST['date'];
    $complaint=$_POST['complaint'];
    $post=$_POST['post'];

    $query="INSERT INTO complaint_tb(date,complaint,post_number)VALUES('$date','$complaint','$post')";
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