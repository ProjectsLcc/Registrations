<?php
    require_once "variables.php";
            
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    if (!$con)
        die('Could not connect: Register again, Sorry for the inconvenience caused' . mysql_error());
    $username = $_POST[$html_username];
    $password = $_POST[$html_password];
    $phone = $_POST[$html_mobileno];
    $query_phone = "SELECT * FROM data WHERE PhoneNo='$phone'";
    $result = mysqli_query($con, $query_phone);
    $row = mysqli_fetch_array($result);
    $timepaid = date($time_format);

    if(count($row) == 0)
        echo $member_not_registered;
    else
    {
    if($row["Paid"] == 'Not Yet')
        echo $payment_incomplete;
       else{
        $query_check = "SELECT * FROM admins WHERE Username='$username' AND Password='$password'";
        $result = mysqli_query($con, $query_check);
        $row = mysqli_fetch_array($result);
        if(count($row) > 0)
        {
            if(($row[$sql_admins_username] == $username) and ($row[$sql_admins_password] == $password))
            {
                $check_query = "SELECT Shirtreceived FROM data WHERE PhoneNo='$phone'";
                $check_result = mysqli_query($con, $check_query);
                $row = mysqli_fetch_array($check_result);
                if($row[$sql_data_shirt] != $user_paid)
                {
                    $query = "UPDATE data SET Shirtreceived='Complete' WHERE PhoneNo='$phone'";
                    $result1 = mysqli_query($con, $query);
                    echo $payment_recieved;
                }
                else
                    echo $user_already_paid;
            }
            else
                echo $invalid_login;
        }
        else
            echo $invalid_login;
    }
  }
?>