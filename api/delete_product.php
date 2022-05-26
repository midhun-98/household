<?php
include 'conn.php';
$delete=$_GET['delete_id'];
$query=mysqli_query($conn,"DELETE FROM product_tb where product_id='$delete'");
if($query)
{
    echo 'done';
}
else
{
    echo 'fail';
}

?>