<!DOCTYPE html>
<html>
<body style="background-color:#E5E4E2">

	<?php
	session_start();

	include("../control/ad_reg_che.php");


	?>


		<h3 align=center style="background-color:white">Admin Registration</h3>
		<form method="post" >
			<a href="adminpro.php" align="right" style="padding: 10px">Profile</a>
			<table style="width:30%" align="center">
				<tr>
					<td> <label>Name</label></td>
					<td>  <input type="text" id="name" name="name" align="center" value="<?php echo $name; ?>"><?php echo $error_name ?></td><br>

				</tr>

				<tr>
					<td><label>Email</label></td>
					<td> <input type="text" id="mail" name="mail" value="<?php echo $mail; ?>"><?php echo $error_email ?></td><br>
				</tr>

				<tr>
					<td><label>DOB</label></td>
					<td> <input style="font-size: 1rem" type="date" id="DOB" name="DOB" value="<?php echo $dob; ?>"><?php echo $error_dob ?><br></td>
				</tr>

				<tr>
					<td><label>Gender</label></td>
					<td>
						<input type="radio" id="maleRadio" name="gender" value="M" checked>
						<label>Male</label>
						<input type="radio" id="femaleRadio" name="gender" value="F">
						<label>Female</label><br>
					</td>
				</tr>
				<tr>
					<td> <label for="bloodtype">BloodGroup</label></td>
					<td>
						<select name="bloodtype" id="bloodtype">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select><br>
					</td>
				</tr>

				<tr>
					<td><label>Contact Number</label></td>
					<td> <input type="text" id="number" name="number" value="<?php echo $number; ?>"><?php echo $error_number ?></td>
				</tr>


				<tr>
					<td> <label>Address</label></td>
					<td> <input type="text" id="address" name="address" value="<?php echo $address; ?>"><?php echo $error_address ?></td>
				</tr>


				<tr>
					<td><label>Religion</label></td>
					<td> <input type="text" id="religion" name="religion" value="<?php echo $religion; ?>"><?php echo $error_religion ?></td>
				</tr>

				<tr>
					<td><label>Joining Date</label></td>
					<td><input style="font-size: 1rem" type="date" id="joinDate" name="joinDate" value="<?php echo $joinDate; ?>"><?php echo $error_joinDate ?></td>
				</tr>

				<tr>
					<td><label>Salary</label></td>
					<td> <input type="text" id="salary" name="salary" value="<?php echo $salary; ?>"><?php echo $error_salary ?></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td> <input type="password" id="password" name="password" value="<?php echo $password; ?>"><?php echo $error_password ?></td>
				</tr>

		


			</table>

			<div style="text-align:center">
				<input type="submit" value="Submit" align="center" style="background-color:white">
			</div>

		</form>

</body>

</html>