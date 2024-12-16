<?php 

include("../../connection.php");

    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_size=$_FILES['file']['size'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $location="../../upload/";
    move_uploaded_file($tmp_name,$location.$file_name);

   $sql = "INSERT INTO logo(image) VALUES('$file_name')";

     if(mysqli_query($conn,$sql)){
        echo '<script language="javascript">';
        echo 'alert("Your Logo Image successfully Upload");';
        echo '</script>';
             }
             else
             {
        echo '<script language="javascript">';
        echo 'alert("Your Logo Image Failed To Upload");';
        echo '</script>';
     }

     header("location:all_Logo.php"); 
?>