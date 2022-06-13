<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM lineman_tb");

if($query)
{
    echo 'done';
}
else
{
    echo 'fail';
}
?>