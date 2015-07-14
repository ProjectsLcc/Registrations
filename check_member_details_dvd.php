<?php
    require_once "variables.php";
        
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    $username = $_POST[$html_username];
    $password = $_POST[$html_password];
    $phone = $_POST[$html_mobileno];
    
    $query_phone = "SELECT * FROM data WHERE PhoneNo='$phone'";
    $result = mysqli_query($con, $query_phone);
    $row = mysqli_fetch_array($result);
    
    $timepaid = date($time_format);
    
    #query database to obtain the member info corresponding to the phone number entered    
    $query = "SELECT * FROM data WHERE Phoneno='$phone'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $name = $row[$sql_data_name];
    $department = $row[$sql_data_department];
    $year = $row[$sql_data_year];
    $email = $row[$sql_data_email];
    $paid = $row["Paid"];
    
    #A html page displaying the details of the member(the person whose phone number was just entered)
    $member_info = '<html>
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
	<hr style="color: white; border:1px dotted white;">
	<form action="login-dvd.php" method="post">
			<center>
				<table>
					<tr>
						<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Name :'.$name.' </td>
					</tr>
					<br>
					<br>
					<tr>
						<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Department : '.$department.'</td>
					</tr>
					<br>
					<tr>
						<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Year : '.$year.' </td>
					</tr>
					<tr>
						<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Email : '.$email.' </td>
					</tr>
					<tr>
						<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Paid : '.$paid.' </td>
					</tr>
				</table>
				<b style="padding-left: 50px;"></b>
				<input type="submit" value="Cancel" style="border-radius: 22px;">
			</center>
		</form>
		<br>
		<br>
		
		<hr style="color: white; border:1px dotted white;">
		<form action="validate_dvd.php" name="newregistration" onsubmit="return(validate());" method="post" >
		<div class="container">
			<center>
				<label style="color: white;" for="username">Username:</label>
				<input type="text" id="username" name="Username" value="'.$username.'">
				<br>
				<br>
				<label style="color: white;" for="password">Password:</label>
				<input type="password" id="password" name="Password" value="'.$password.'">
				<br>
				<br>
				<label style="color: white;" for="mobileno">Mobile No:</label>
				<input type="text" id="Mobileno" name="Mobileno" value="'.$phone.'">
				<br>
				<b style="padding-left: 50px;"></b>
				<input type="submit" value="Confirm" style="border-radius: 22px;">
			</center>
		</div>
		</form>
		
	<br>
	
	</body>
</html>';
            
    if(count($row) == 0)
        echo $not_registered;
    else
    {
        #query the database to check for login credentials
        $query_check = "SELECT * FROM admins WHERE Username='$username' AND Password='$password'";
        $result = mysqli_query($con, $query_check);
        $row = mysqli_fetch_array($result);
        
        if(count($row) > 0)
        {
            #login details are true
            if(($row[$sql_admins_username] == $username) and ($row[$sql_admins_password] == $password)) #Prevents sql injection
            {
                #query the database to know whther the user paid or not
                $check_query = "SELECT Paid FROM data WHERE PhoneNo='$phone'";
                $check_result = mysqli_query($con, $check_query);
                $row = mysqli_fetch_array($check_result);
                echo $member_info;
            }
            else
                echo $invalid_login;
        }
        else
            echo $invalid_login;
  }  
?>