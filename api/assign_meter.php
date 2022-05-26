<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM user_tb where meter_number='0'");
if($query)
{
    echo 'done';
}
else
{
    echo 'fail';
}
?>