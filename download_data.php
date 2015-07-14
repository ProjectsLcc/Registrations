<?php
    require_once "variables.php";
    $con = mysqli_connect($hostname, $host_user, $host_pass, $host_database);
    if(!$con)
    	die('Could not access server, please try again, sorry for the inconvenience caused'. mysql_error());
    $username = $_POST[$html_username];
    $password = $_POST[$html_password];

    $query_check = "SELECT * FROM admins WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($con, $query_check);
    $row = mysqli_fetch_array($result);

    if(count($row) > 0)
    {
        if(($row[$sql_admins_username] == $username) and ($row[$sql_admins_password] == $password) and ($row[$sql_admins_username] == $admin_username))
        {
                $csv_export = '';
                $query1 = "SELECT * FROM data";
                $query = mysqli_query($con, $query1);
                $result = mysqli_query($con, "DESCRIBE data");
                $field_array = array();
                $i = 0;
                
                #obtain the list of column names
                while($row = mysqli_fetch_array($result))
                {
                    $csv_export.= $row['Field'].',';
                    $field_array[$i] = $row['Field'];
                    $i += 1;
                }
                $csv_export.= "\n";
                
                while($row = mysqli_fetch_array($query)) {
                    // create line with field values
                    for($i = 0; $i < 12; $i++) {
                        $csv_export.= $row[$field_array[$i]].',';
                    } 
                    $csv_export.= "\n"; 
                }

                // Export the data and prompt a csv file for download
                header("Content-type: text/x-csv");
                header("Content-Disposition: attachment; filename=".$csv_fileName."");
                echo($csv_export);
        }
        else
            echo $invalid_login;
    }
    else
        echo $invalid_login;
?>