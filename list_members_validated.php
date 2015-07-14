<?php
    require_once "variables.php";
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    if(!$con)
    	die('Could not access server, please try again, sorry for the inconvenience caused'. mysql_error());
    $username = $_POST[$html_username];
    $query = "SELECT Name FROM data WHERE Paidto='$username'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
?>