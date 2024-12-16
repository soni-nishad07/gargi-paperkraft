<?php
include("../../connection.php");
$id=$_REQUEST['id'];
	
$query="delete from people_say where id='$id'";
mysqli_query($conn,$query);
header("Location:list_people_say.php");

?>