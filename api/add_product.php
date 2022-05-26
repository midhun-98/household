<?php
include 'conn.php';

    $name=$_POST['name'];  
    $price=$_POST['price'];
    $pic=$_FILES['f1']['name'];

    if($pic!="") 
 		 {
  			  $filearray=pathinfo($_FILES['f1']['name']);
  			  $file1=rand();
  			  $file_ext=$filearray["extension"];
  			
  			    $filenew=$file1.".".$file_ext;
			
   			   move_uploaded_file($_FILES['f1']['tmp_name'],"images/gallery/".$filenew); 

		  }
    
    $query=mysqli_query($conn,"INSERT INTO product_tb(product_name,image,price) VALUES ('$name','$filenew','$price')");

    if($query)
    {
        echo 'done';
    }
    else
    {
        echo 'fail';
    }
	   
?>