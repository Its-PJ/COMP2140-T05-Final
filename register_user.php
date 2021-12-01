<?php
include('dbconnect.php');

$userF_name = $_POST ['f_name'];
$userL_name = $_POST ['l_name'];
$contactnum = $_POST ['contactnum'];
$user_email = $_POST['student_email'];
$user_password = $_POST['user_password'];

$sql = "INSERT into studentdb(First_Name, Last_Name, User_Password, User_Email, contactnum) VALUES('$userF_name', '$userL_name', '$user_password', '$user_email', '$contactnum')";
if (mysqli_query($connection, $sql)){
    echo "Data Stored";
}
?>