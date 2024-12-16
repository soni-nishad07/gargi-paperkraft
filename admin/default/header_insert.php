<?php

include("../../connection.php");
    
 $email_id=$_POST['email_id'];
 $contact_number=$_POST['contact_number'];
 
   $ql = "insert into header(email_id,contact_number) values('$email_id','$contact_number')";
       
    mysqli_query($conn,$ql);
    header("location:all_header.php");
    
?>  