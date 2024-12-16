<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from contact where id='$id'";
mysqli_query($conn,$query);
header("Location:contact_us.php");

?>