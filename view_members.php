<?php
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
		<form action="view_members_under.php" name="newregistration" onsubmit="return(validate());" method="post" >
		<div class="container">
			<center>
				<label style="color: white;" for="username">Username:</label>
				<input type="text" id="username" name="Username">
				<br>
				<br>
				<label style="color: white;" for="password">Password:</label>
				<input type="password" id="password" name="Password">
				<br>
				<b style="padding-left:90px;"></b>
				<input type="submit" value="View" style="border-radius: 22px;">
				<hr style="color: white; border:1px dotted white;">
				<br>
				<table>
					<tr>
		</div>
		</form>
	<br>
	</body>
</html>';

    echo $login_string;
?>	
			
