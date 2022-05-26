<?php
include 'conn.php';
$delete=$_GET['delete_id'];
$query=mysqli_query($conn,"DELETE FROM lineman_tb  where login_id='$delete'");
$query1=mysqli_query($conn,"DELETE FROM login_tb where login_id='$delete'");
if($query&&$query1)
{
    echo 'done';
}
else
{
    echo 'fail';
}
?>