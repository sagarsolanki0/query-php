<?php
	require"config.php";
	
	$id=$_REQUEST['id'];
	$delete="DELETE FROM `form` WHERE `id`='$id'";
	$result=mysqli_query($con,$delete);
	echo $delete;
	header("location:table.php");
?>