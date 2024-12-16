<?php 

include("../../connection.php");

    $area=$_POST['area'];
    $city_name=$_POST['city_name'];
    $pincode=$_POST['pincode'];
    $state=$_POST['state'];


    $sql =  "INSERT INTO flutter(area,city_name,pincode,state) VALUES('$area','$city_name','$pincode','$state')";

     if(mysqli_query($conn,$sql)){
        echo '<script language="javascript">';
        echo 'alert("Your content successfully Upload");';
        echo '</script>';
             }
             else
             {       
        echo '<script language="javascript">';
        echo 'alert("Your content Failed To Upload");';
        echo '</script>';
     }

     header("location:all_flutter.php");
?>