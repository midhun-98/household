<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM user_tb");

if($query)
{
    echo 'done';
}
else
{
    echo 'fail';
}
?>