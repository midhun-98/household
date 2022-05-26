<?php
include 'conn.php';
$delete=$_GET['delete_id'];
$query=mysqli_query($conn,"DELETE FROM supervisor_tb where login_id='$delete'");
if($query)
{
    echo 'done';
}
else
{
    echo 'fail';
}
?>