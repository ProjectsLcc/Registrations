<?php
    $hostname = "localhost";
    $host_user = "wwwlbnau_root";
    $host_pass = "lccsjce@14";
    $host_database = "wwwlbnau_members";
    $html_username = 'Username';
    $html_password = 'Password';
    $html_mobileno = 'Mobileno';
    $time_format = "h:i:sa D/M/Y";

    $not_paid = "Not Yet";
    $html_mobile_status = 'mobileno-status';
    $user_paid = "Complete";    
    $csv_fileName = "data.csv";
    
    $html_signup_mobile = 'mobileno';
    $html_signup_name = 'textnames';
    $html_signup_email = 'emailid';
    $html_signup_sex = 'sex';
    $html_signup_department = 'department';
    $html_signup_year = 'year';
    $html_signup_shirt = 'tshirt';
    
    $sql_data_name = "Name";
    $sql_data_department = 'Department';
    $sql_data_year = "Year";
    $sql_data_email = "Emailid";
    $sql_data_timepaid = "Timepaid";
    $sql_data_shirt = "Shirtreceived";
    $sql_data_cd = "CD";
        
    $sql_admins_username = "Username";
    $sql_admins_password = "Password";
    $sql_admins_paid = "Paid";

    $admin_username = "admin";
    
    $member_not_registered = '<html style="background-color: black; background-size:100%;">
<head>
	<title>Registration | LCC-SJCE</title>
	<meta charset="utf-8" />
	<meta name="author" content="LCC Registration">
	<meta name="description" content="Thanks for joining us!">
	<meta name="viewport" content="user-scalable = yes">
</head>
<body style="font-family:arial,sans-serif;
-webkit-font-smoothing:antialiased;
font-size:120%;
margin:1em;">
	<center>
		<h1 style="color: white; font-size: 2em;"></b><a style="color: red;">MEMBER NOT REGISTERED</a><b></h1>
		<br>
	</center>
</body>
</html>';
    
    $payment_incomplete = '<html style="background-color: black; background-size:100%;">
<head>
	<title>Registration | LCC-SJCE</title>
	<meta charset="utf-8" />
	<meta name="author" content="LCC Registration">
	<meta name="description" content="Thanks for joining us!">
	<meta name="viewport" content="user-scalable = yes">
</head>
<body style="font-family:arial,sans-serif;
-webkit-font-smoothing:antialiased;
font-size:120%;
margin:1em;">
	<center>
		<h1 style="color: white; font-size: 2em;"></b><a style="color: red;">PAYMENT NOT RECIEVED</a><b></h1>
		<br>
	</center>
</body>
</html>';

    $payment_recieved = '<html style="background-color: black; background-size:100%;">
    <head>
	    <title>Registration | LCC-SJCE</title>
	    <meta charset="utf-8" />
	    <meta name="author" content="LCC Registration">
	    <meta name="description" content="Thanks for joining us!">
	    <meta name="viewport" content="user-scalable = yes">
    </head>
    <body style="font-family:arial,sans-serif;
    -webkit-font-smoothing:antialiased;
    font-size:120%;
    margin:1em;">
	    <center>
		    <h1 style="color: white; font-size: 2em;"></b>STATUS : PAYMENT <a style="color: green;">RECIEVED</a><b></h1>
		    <br>
	    </center>
    </body>
</html>';
        
        
    $invalid_login = '<html style="background-color: black; background-size:100%;">
<head>
    <title>Registration | LCC-SJCE</title>
    <meta charset="utf-8" />
    <meta name="author" content="LCC Registration">
    <meta name="description" content="Thanks for joining us!">
    <meta name="viewport" content="user-scalable = yes">
</head>
<body style="font-family:arial,sans-serif;
-webkit-font-smoothing:antialiased;
font-size:120%;
margin:1em;">
    <center>
        <h1 style="color: white; font-size: 2em;"></b><a style="color: red;">INVALID LOGIN CREDENTIALS</a><b></h1>
        <br>
    </center>
</body>
</html>';
    
    $user_already_paid = '<html style="background-color: black; background-size:100%;">
<head>
    <title>Registration | LCC-SJCE</title>
    <meta charset="utf-8" />
    <meta name="author" content="LCC Registration">
    <meta name="description" content="Thanks for joining us!">
    <meta name="viewport" content="user-scalable = yes">
</head>
<body style="font-family:arial,sans-serif;
-webkit-font-smoothing:antialiased;
font-size:120%;
margin:1em;">
    <center>
        <h1 style="color: white; font-size: 2em;"></b><a style="color: red;">ALREADY PAID</a><b></h1>
        <br>
    </center>
</body>
</html>';
    
    $already_registered = '<html style="background-color: black; background-size:100%;">
	    <head>
		    <title>Registration | LCC-SJCE</title>
		    <meta charset="utf-8" />
		    <meta name="author" content="LCC Registration">
		    <meta name="description" content="Thanks for joining us!">
		    <meta name="viewport" content="user-scalable = yes">
	    </head>
	    <body style="font-family:arial,sans-serif;
	    -webkit-font-smoothing:antialiased;
	    font-size:120%;
	    margin:1em;">
		    <center>
			    <h1 style="color: white; font-size: 2em;"></b><a style="color: red;">ALREADY REGISTERED</a><b></h1>
			    <br>
		    </center>
	    </body>
    </html>';
    
    $instructions_to_pay = '<html style="background-color: black; background-size:100%;">
	<head>
		<title>Registration | LCC-SJCE</title>
		<meta charset="utf-8" />
		<meta name="author" content="LCC Registration">
		<meta name="description" content="Thanks for joining us!">
		<meta name="viewport" content="user-scalable = yes">
	</head>
	<body style="font-family:arial,sans-serif;
	-webkit-font-smoothing:antialiased;
	font-size:120%;
	margin:1em;">
		<center>
			<h1 style="color: white; font-size: 2em;"><b>TO COMPLETE THE REGISTRATION, PLEASE PAY <a style="color: green;">Rs 250</a> TO ANY MEMBER MENTIONED BELOW</b></h1>
			<br>
			<!--h3 style="color: green;"><i>Our Offer : First 50 Registration are Rs 200! :D</i></h3>-->
		</center>
		<br>
		<center>
		<table>
				<tr style="color: white; font-size: 1em;">
					<td width="250px"><p class="main"><b>Chandan</b><br>Ph: 9901931756<br><br></p></td>
					<td width="250px"><p class="main"><b>Jagat</b><br>Ph: 9591081819<br><br></p></td>
					<td width="250"><p class="main"><b>Raghunandan</b><br>Ph: 8867575701<br><br></p></td>
				</tr>
				<tr style="color: white; font-size: 1em;">
					<td width="250px"><p class="main"><b>Sharath</b><br>Ph: 7899817257<br><br></p>
					<td width="250px"><p class="main"><b>Shreyas</b><br>Ph: 8892078360<br><br></p></td>
					<td width="250px"><p class="main"><b>Vasanth </b><br>Ph: 9738969875<br><br></p></td>
				</tr>
				<tr style="color: white; font-size: 1em;">
					<td width="250px"><p class="main"><b>Sriram</b><br>Ph: 9686343101<br><br></p>
					<td width="250px"><p class="main"><b>Srinidhi</b><br>Ph: 9740402364<br><br></p></td>
					<td width="250px"><p class="main"><b>Naveen</b><br>Ph: 9663426024<br><br></p></td>
				</tr>
		</table>
		</center>
	</body>
</html>';
    
    $login_to_download = '<html>
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
		<form action="download_data.php" name="newregistration" onsubmit="return(validate());" method="post" >
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
				<input type="submit" value="Download" style="border-radius: 22px;">
				<hr style="color: white; border:1px dotted white;">
				<br>
				<table>
					<tr>
		</div>
		</form>
	<br>
	</body>
</html>';
?>