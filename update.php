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
    }
?>