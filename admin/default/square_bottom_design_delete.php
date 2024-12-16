<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from square_bottom_design where id='$id'";
mysqli_query($conn,$query);
header("Location:all_square_bottom_design");

?>