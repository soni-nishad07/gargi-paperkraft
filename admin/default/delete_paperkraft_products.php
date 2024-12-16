<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from industrial where id='$id'";
mysqli_query($conn,$query);
header("Location:all_paperkraft_products");

?>