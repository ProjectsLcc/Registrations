<?php
	session_start();
    require_once "variables.php";
	$user_pass_phrase=sha1($_POST['verify']);
   if($_SESSION['pass_phrase']!=$user_pass_phrase)
    {
     $verifyErr="Please enter Captcha characters exactly";
     echo '<p style="text-align:center;font-size:22px;color:#CD5C5C">Please enter Captcha characters exactly</p>';
    }
	else{
    
    //$phone = $_POST[$html_signup_mobile];
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    if(!$con)
    	die('Could not access server, please try again, sorry for the inconvenience caused'. mysql_error());
    $phone = mysqli_real_escape_string($con, trim($_POST[$html_signup_mobile]));
    $query_phone = "SELECT * FROM data WHERE PhoneNo='$phone'";
    $result = mysqli_query($con, $query_phone);
    $row = mysqli_fetch_array($result);
    if(count($row) == 0)
    {
        $name = mysqli_real_escape_string($con, trim($_POST[$html_signup_name]));
        $email = mysqli_real_escape_string($con, trim($_POST[$html_signup_email]));
        $sex = mysqli_real_escape_string($con, trim($_POST[$html_signup_sex]));
        $department = mysqli_real_escape_string($con, trim($_POST[$html_signup_department]));
        $year = mysqli_real_escape_string($con, trim($_POST[$html_signup_year]));
        $phone = mysqli_real_escape_string($con, trim($_POST[$html_signup_mobile]));
        $shirt = mysqli_real_escape_string($con, trim($_POST[$html_signup_shirt]));
        $paid = "Not Yet";
        $paidto = "None";
        $shirtrec = "Not Yet";
        $cd = "Not Yet";
        
        $result = mysqli_query($con, "INSERT INTO `data` (`Name`, `Emailid`, `Sex`, `Shirt`, `Department`, `Year`, `PhoneNo`, `Paid`, `Paidto`, `Shirtreceived`, `CD`)  VALUES ('$name', '$email', '$sex', '$shirt', '$department', '$year', '$phone', '$paid', '$paidto', '$shirtrec', '$cd')");
        echo $instructions_to_pay; 
    }
    else
        echo $already_registered; 
	}
?>