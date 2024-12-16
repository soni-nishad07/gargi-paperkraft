<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from flat_bottom where id='$id'";
mysqli_query($conn,$query);
header("Location:all_flat_bottom_bags");

?>