<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from background where id='$id'";
mysqli_query($conn,$query);
header("Location:all_login_background.php");

?>