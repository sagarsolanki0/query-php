<?php
	require "config.php";
	$id=$_REQUEST['id']
	$fnm=$_REQUEST['fnm'];
	$lnm=$_REQUEST['lnm'];
	$City=$_REQUEST['City'];
	$State=$_REQUEST['State'];
	$Country=$_REQUEST['Country'];
	$Msg=$_REQUEST['Msg'];
	$Ged=$_REQUEST['Ged'];
	$Hobby=$_REQUEST['Hobby'];

	$Update="UPDATE`stud`SET `fnm`='$fnm',`lnm`='$lnm',`City`='$City',`State`='$State',`Country`='$Country' ,`Msg`='$Msg',`Ged`='$Ged',`Hobby`='$Hobby'	WHERE `id`='$id'";
	
	$result=mysqli_query($con,$Update);
	
	header("location:table.php");
	
	?>