<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from social_media where id='$id'";
mysqli_query($conn,$query);
header("Location:all_social_media.php");

?>