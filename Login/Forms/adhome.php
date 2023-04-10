<!DOCTYPE html>

<?php
//session_start();
include("../control/adminprocon.php")
?>





<body style="background-color:#E5E4E2">

	<img src="../Uni.png" alt="System logo">
	<h1 style="background-color: white">Smart University<br>System</h1>
			
	<form method="GET" enctype="multipart/form-data" action="../Common/Logout.php">
		<button type="submit" name=logout style="background-color:white ">Logout</button>
	</form>
		
		<div align="right">
			<a href="adminpro.php" align="right" style="padding: 10px">Profile</a>
			<a href="admin_reg.php" style="padding: 20px">Registration</a>
		</div>

</body>
</html>