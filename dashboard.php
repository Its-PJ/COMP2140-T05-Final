<?php
include ('dbconnect.php');
$user_ID = $_POST ['user_ID'];
$user_password = md5($_POST['user_password']);

$admin_query = "SELECT * FROM teacher WHERE user_ID = '$user_ID' and passwd = '$user_password'"; 
if (mysqli_query($connection, $admin_query)){
    header("Location: teacher_dash.php");
}

$stud_query = "SELECT * FROM studentdb WHERE user_ID = '$user_ID' and passwd = '$user_password'";
if (mysqli_query($connection, $stud_query)){
    header("Location: student_dash.php");
}
?>
