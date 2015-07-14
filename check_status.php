<?php
    require_once "variables.php";
    
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    if(!$con)
    	die('Could not access server, please try again, sorry for the inconvenience caused'. mysql_error());
    $phone = mysqli_real_escape_string($con, trim($_POST[$html_mobile_status]));
    $query = "SELECT Paid FROM data WHERE PhoneNo='$phone'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if(count($row) == 0)
        echo $member_not_registered;
    else if($row[$sql_admins_paid] == $user_paid)
        echo $payment_recieved;
    else
        echo $payment_incomplete;
?>