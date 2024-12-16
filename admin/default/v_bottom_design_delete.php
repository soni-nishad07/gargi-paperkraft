<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from v_bottom_design where id='$id'";
mysqli_query($conn,$query);
header("Location:all_v_bottom_design");

?>