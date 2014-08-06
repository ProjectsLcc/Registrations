<?php
    if(count($_POST) > 0)
    {
        $con = mysqli_connect("localhost", "root", "pass", "members");
        $name = $_POST['textnames'];
        $email = $_POST['emailid'];
        $sex = $_POST['sex'];
        $department = $_POST['department'];
        $sem = $_POST['semester'];
        $phone = $_POST['mobileno'];
        $shirt = $_POST['tshirt'];
        $paid = "Not Yet";
        $result = mysqli_query($con, "INSERT INTO `data` (`Name`, `Emailid`, `Sex`, `Shirt`, `Department`, `Semester`, `PhoneNo`, `Paid`)  VALUES ('$name', '$email', '$sex', '$shirt', '$department', '$sem', '$phone', '$paid')");
        $done = '<html style="background-color: black; background-size:100%;">
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
			<h1 style="color: white; font-size: 2em;"><b>TO COMPLETE THE REGISTRATION, PLEASE PAY <a style="color: green;">Rs 200</a> TO THE LCC REGISTER PERSON AT YAMPA, NESCAFE OR CS LOBBY.</b></h1>
			<br>
			<h1 style="color: white; font-size: 2em;"><b>THANK YOU!</b></h1>
		</center>
	</body>
</html>';
        echo $done; 
    }
?>
