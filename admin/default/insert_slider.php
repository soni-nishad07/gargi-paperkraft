<?php 
  
  include("../../connection.php");
  ?>
  
  <?php

  if(isset($_POST['submit']))
  {
  extract($_POST);
  $file_name=$_FILES['file']['name'];
  $tmp_name=$_FILES['file']['tmp_name'];
  $location='../../uploads/';

  $heading=$_POST['heading'];
  $sub_heading=$_POST['heading1'];
   $paragraph=$_POST['paragraph'];
  
  $query="insert into slider(image,heading,sub_heading,paragraph) values('$file_name','$heading','$sub_heading','$paragraph')";
  mysqli_query($conn,$query);
  
  move_uploaded_file($tmp_name,$location.$file_name);
  echo'<script>
  alert("content has been added successfully");
  </script>';
  header("location:all_slider.php");
  }
 
?>
