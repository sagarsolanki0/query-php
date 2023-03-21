<html>
</head>
		
	<style>
		table,h3
		 {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		th,h3
		{
		  width: 100%;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		table
		{
		  background-color:#b4b4b4;
		}

		
		
	</style>
</head>
<body>
	
<?php
				require"config.php";
				$sql="SELECT * FROM `form`";
				$res=mysqli_query($con,$sql);
?>	

	<table align="center" border="2">
	<h3  align="center">ALL RECORDS</h3>
		  <tr>
			
			<th>fnm</th>
			<th>lnm</th>
			<th>City</th>
			<th>State</th>
			<th>Country</th>
			<th>Msg</th>
			<th>Ged</th>
			<th>Hobby</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
	
			<?php	
				while($data=mysqli_fetch_assoc($res))
				{
			?>
			<tr>
			
			<td> <?php  echo $data['fnm']; ?> </td>
			<td> <?php echo $data['lnm']; ?>	</td>	
			<td> <?php echo $data['City'];	?> </td>
			<td> <?php echo $data['State']; ?> </td>
			<td> <?php echo $data['Country']; ?> </td>
			<td> <?php echo $data['Msg']; ?> </td>
			<td> <?php echo $data['Ged']; ?> </td>
			<td> <?php echo $data['Hobby']; ?> </td>
			 <td><a href="update form.php?id=<?php echo $data['id'];?>">Update</a></td>
		    <td><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
			  
			</tr>
			<?php
				}
			?>
			
	</table>

</body>
</html>
