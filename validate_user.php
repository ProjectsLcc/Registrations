<?php
        
        $con = mysqli_connect("localhost", "root", "pass", "members");
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $phone = $_POST['Mobileno'];
        $yes_string = '<html style="background-color: black; background-size:100%;">
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
        
        
        $no_string = '<html style="background-color: black; background-size:100%;">
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
        if($username !='*' and $password != "*")
        {
            $query_check = "SELECT * FROM admins WHERE Username='$username' AND Password='$password'";
            $result = mysqli_query($con, $query_check);
            $row = mysqli_fetch_array($result);
            if(count($row) > 0)
            {
                if(($row['Username'] == $username) and ($row['Password'] == $password))
                {
                    $query = "UPDATE data SET Paid='Complete' WHERE PhoneNo='$phone'";
                    $result1 = mysqli_query($con, $query);
                    echo $yes_string;
                }
                else
                    echo $no_string;
            }
            else
                echo $no_string;
        }
        else
            echo $no_string;
            
?>
