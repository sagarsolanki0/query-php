<html>
<head>
<style>
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
	
		input[type=submit]
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

		input[type=submit]:hover
		{
		  background-color: #45a049;
		}

		div
		 {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		 }
</style>
</head>
<body>

	<h3> Form</h3>

	<div>
	<form action="insert.php" method="POST">
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="fnm" placeholder="Your name..">

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lnm" placeholder="Your last name..">
		
		<label for="city">City</label>
			<select id="city" name="City">
				<option value="Rajkot">Rajkot</option>
				<option value="Surat">Surat</option>
				<option value="Jamanagar">Jamanagar</option>
				<option value="Dholakapur">Dholakapur</option>
				</select>
				<br>
	
     	<label for="state">State</label>
				<select id="state" name="State">
				<option value="gujarat">Gujarat</option>
				<option value="goa">Goa</option>
				<option value="punjab">Punjab</option>
				<option value="bihar">Bihar</option>
				</select>
				<br>

		<label for="country">Country</label>
		<select id="country" name="Country">
		<option value="ind">Ind</option>
		<option value="australia">Australia</option>
		<option value="canada">Canada</option>
		<option value="usa">USA</option>
    </select>
	
	<label for="Massage">Massage</label>
	
			<input type="text" textarea rows="4" cols="50" name="Msg" required></textarea>
			<br>
			
			
	<label for="Gender">Gender</label> 
			<input type="radio" id="male" name="Ged" value="male"><label for="male">MALE</label><br>
  			<input type="radio" id="female" name="Ged" value="female"><label for="female">FEMALE</label><br>
  			
			
				
			<label for="Hobby" >Hobby</label>
			<id="Hobby" name="Hobby">
			<input type="checkbox" name="Hobby" value="Rading">Rading
			<input type="checkbox" name="Hobby" value="writing">writing
			<input type="checkbox" name="Hobby" value="runing">runing
			<br>
			<input type="Submit" name="Submit" value="Submit">
				
  </form>
</div>

	<?php
	require"config.php";
	?>
	
	

</body>
</html>