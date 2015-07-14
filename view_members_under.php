<?php
        require_once "variables.php";
        
        $username = $_POST[$html_username];
        $password = $_POST[$html_password];
        $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
        if(!$con)
    		die('Could not access server, please try again, sorry for the inconvenience caused'. mysql_error());
        $display_string_start = '<!DOCTYPE html>
<html style="background-color: black;">
	<head>
		<title>Login | LCC-SJCE</title>
		<meta charset="utf-8" />
		<meta name="author" content="LCC Member Login">
		<meta name="description" content="Confirm Registration of new user LCC 2014">
		<meta name="keywords" content="LCC, lcc, lcc login, LCC LOGIN, lcc login 2014, LCC LOGIN 2014, linux campus club sjce, SJCE Mysore lcc">
		<meta name="viewport" content="user-scalable = yes">
		<link href="./css/login-lcc.css" rel="stylesheet" media="screen">
		<link rel="shrotcut icon" href="./images/logo.png">
	</head>
	<body>
	<center>
		<h1 style="color: white;"><b>VIEW MEMBERS</b></h1>
	</center>
	<br>
	<hr>
	<center>
	<table>
		<tr>
			<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Sr No </td>
			<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Name <b style="padding-left: 70px;"></b></td>
			<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Department <b style="padding-left: 70px;"></b></td>
			<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Year </td>
			<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Phone No <b style="padding-left: 70px;"></b></td>
			<td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">Time Paid </td>
		</tr>';

		$display_string_end = '
		<br>
	</center>
	</table>
	</body>
</html>';
        
        function print_rows($result)
        {
            $num = 0;
            while($row = mysqli_fetch_array($result))
            {
                $name = $row['Name'];
                $num += 1;
                $department = $row['Department'];
                $year = $row['Year'];
                $phone = $row['PhoneNo'];
                $time = $row['Timepaid'];
                $display_string = '<!-- Loop Over tr with the details of the students within the example fields -->
		    <tr>
			    <td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">'.$num.'<b style="padding-left: 70px;"></b></td>
			    <td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">'.$name.'<b style="padding-left: 70px;"></b></td>
			    <td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">'.$department.'<b style="padding-left: 70px;"></b></td>
			    <td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">'.$year.'<b style="padding-left: 70px;"></b></td>
			    <td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">'.$phone.'<b style="padding-left: 70px;"></b></td>
			    <td style="color: white; font-family:arial,sans-serif; -webkit-font-smoothing:antialiased; font-size:120%;">'.$time.'<b style="padding-left: 70px;"></b></td>
		    </tr>';
		        echo $display_string;
		    }
        }

        $query_check = "SELECT * FROM admins WHERE Username='$username' AND Password='$password'";
        $result = mysqli_query($con, $query_check);
        $row = mysqli_fetch_array($result);
        if(count($row) > 0)
        {
            if(($row[$sql_admins_username] == $username) and ($row[$sql_admins_password] == $password) and ($row[$sql_admins_username] == $admin_username))
            {
            
                echo $display_string_start;
                $check_query = "SELECT Name,Department,Year,PhoneNo,Paidto,Timepaid FROM data";
                $result = mysqli_query($con, $check_query);
                print_rows($result);
                echo $display_string_end;
            }
            else if(($row[$sql_admins_username] == $username) and ($row[$sql_admins_password] == $password))
            {
                echo $display_string_start;
                $check_query = "SELECT Name,Department,Year,PhoneNo,Paidto,Timepaid FROM data WHERE Paidto='$username'";
                $result = mysqli_query($con, $check_query);
                print_rows($result);
                echo $display_string_end;
            }
            else
                echo $invalid_login;
        }
        else
            echo $invalid_login;
?>