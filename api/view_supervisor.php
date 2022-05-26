<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM supervisor_tb");

if(mysqli_num_rows($query)>0)
{

    while($data=mysqli_fetch_assoc($query)){

        $result[]=$data;
    }

}

    echo json_encode($result);
?>