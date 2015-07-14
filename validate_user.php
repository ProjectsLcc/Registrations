<?php
    require_once "variables.php";
    date_default_timezone_set('Asia/Calcutta');
            
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    if(!$con)
    	die('Could not access server, please try again, sorry for the inconvenience caused'. mysql_error());
    $username = $_POST[$html_username];
    $password = $_POST[$html_password];
    $phone = $_POST[$html_mobileno];
    $query_phone = "SELECT * FROM data WHERE PhoneNo='$phone'";
    $result = mysqli_query($con, $query_phone);
    $row = mysqli_fetch_array($result);
    $timepaid = date("h:i:sa d/m/Y");

    if(count($row) == 0)
        echo $member_not_registered;
    else
    {
        $query_check = "SELECT * FROM admins WHERE Username='$username' AND Password='$password'";
        $result = mysqli_query($con, $query_check);
        $row = mysqli_fetch_array($result);
        if(count($row) > 0)
        {
            if(($row[$sql_admins_username] == $username) and ($row[$sql_admins_password] == $password))
            {
                $check_query = "SELECT Paid FROM data WHERE PhoneNo='$phone'";
                $check_result = mysqli_query($con, $check_query);
                $row = mysqli_fetch_array($check_result);
                if($row[$sql_admins_paid] == $not_paid)
                {
                    $query = "SELECT * from data WHERE PhoneNo='$phone'";
                    $result1 = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result1);
                    $email = $row[$sql_data_email];
                    $tmp = exec("python mail.py .$email");                        

                    $query = "UPDATE data SET Paid='Complete' WHERE PhoneNo='$phone'";
                    $result1 = mysqli_query($con, $query);
                
                    $query_inc = "UPDATE admins SET Numvalidated=Numvalidated+1 WHERE Username='$username'";
                    $result = mysqli_query($con, $query_inc);
                    
                    $query_paidto = "UPDATE data SET Paidto='$username' WHERE PhoneNo='$phone'";
                    $result = mysqli_query($con, $query_paidto);
                    
                    $query_time = "UPDATE data SET Timepaid='$timepaid' WHERE PhoneNo='$phone'";
                    $result = mysqli_query($con, $query_time);
                    
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
?>