	<?php
				require"config.php";
				
	$fnm=$_REQUEST['fnm'];
	$lnm=$_REQUEST['lnm'];
	$City=$_REQUEST['City'];
	$State=$_REQUEST['State'];
	$Country=$_REQUEST['Country'];
	$Msg=$_REQUEST['Msg'];
	$Ged=$_REQUEST['Ged'];
	$Hobby=$_REQUEST['Hobby'];
	
	$insert="INSERT INTO `form`(`fnm`,`lnm`,`City`,`State`,`Country`,`Msg`,`Ged`,`Hobby`)VALUES('$fnm','$lnm','$City','$State','$Country','$Msg','$Ged','$Hobby')";
	$result=mysqli_query($con,$insert);
	echo $insert; 
	header("location:form1.php");
?>