<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM complaint_tb");
if($query)
{
    $array['msg']='done';
}
else
{
    $array['msg']='fail';
}
echo json_encode($array);
?>