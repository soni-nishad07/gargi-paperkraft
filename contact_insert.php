<?php

include("connection.php");
    
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $message=$_POST['message'];
    
   $ql = "insert into contact(name,email,phone,message,date) values('$name','$email','$phone','$message',now())";
       
    mysqli_query($conn,$ql);
    echo '<script language="javascript">';
    echo 'alert("Your message has been sent. Thank you!");';
    echo 'window.location.href="index";';
    echo '</script>';
    
    
?>  