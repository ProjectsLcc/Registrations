<?php
    
    require_once "variables.php";    
    
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    if(!$con)
    	die('Could not access server, please try again, sorry for the inconvenience caused'. mysql_error());
    $query = "SELECT count(*) FROM data WHERE Paid='Complete'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $num_paid = $row['count(*)'];
    $query = "SELECT count(*) FROM data WHERE Paid='Not Yet'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $num_registered = $row['count(*)'];
    $num_registered += $num_paid;
    
    $login_string = '<html>
	<head>
		<title>Login | LCC-SJCE</title>
		<meta charset="utf-8" />
		<meta name="author" content="LCC Member Login">
		<meta name="description" content="Confirm Registration of new user LCC 2014">
		<meta name="keywords" content="LCC, lcc, lcc login, LCC LOGIN, lcc login 2014, LCC LOGIN 2014, linux campus club sjce, SJCE Mysore lcc">
		<meta name="viewport" content="user-scalable = yes">
		<link href="./css/login-lcc.css" rel="stylesheet" media="screen">
		<link rel="shrotcut icon" href="./images/logo.png">
		<script type="text/javascript" src="./js/newregvalidate.js"></script>
	</head>
	<body>
	<center>
		<h1 style="color: white;"><b>ADMIN LOGIN - LCC</b></h1>
	</center>
	<br>
	<hr style="color: white; border:1px dotted white;">
		<form action="check_member_details.php" name="newregistration" onsubmit="return(validate());" method="post" >
		<div class="container">
			<center>
				<label style="color: white;" for="username">Username:</label>
				<input type="text" id="username" name="Username">
				<br>
				<br>
				<label style="color: white;" for="password">Password:</label>
				<input type="password" id="password" name="Password">
				<br>
				<br>
				<label style="color: white;" for="mobileno">Mobile No:</label>
				<input type="text" id="Mobileno" name="Mobileno" >
				<br>
				<b style="padding-left: 70px;"></b>
				<input type="submit" value="Check User" style="border-radius: 22px;">
				<hr style="color: white; border:1px dotted white;">
				<br>
				<table>
					<tr>
						<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Number of Members Paid : '.$num_paid.'</td>
					</tr>
					<br>
					<br>
					<tr>
						<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Number of Registrations : '.$num_registered.'</td>
					</tr>
				</table>
			</center>
		</div>
		</form>
	<br>
	
	</body>
</html>';
    echo $login_string;
?>	
			