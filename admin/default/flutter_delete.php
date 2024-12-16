<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from flutter where id='$id'";
mysqli_query($conn,$query);
header("Location:all_flutter.php");

?>