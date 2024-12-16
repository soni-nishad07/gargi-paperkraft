<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from services where id='$id'";
mysqli_query($conn,$query);
header("Location:all_services.php");

?>