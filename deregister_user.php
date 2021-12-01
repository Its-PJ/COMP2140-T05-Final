<?php
include('dbconnect.php');
$userF_name = $_POST ['f_name'];
$userL_name = $_POST ['l_name'];
$stud_query = "SELECT * FROM studentdb WHERE First_Name = '$userF_name' and Last_Name = '$userL_name'";
if (mysqli_query($connection, $stud_query)){
    echo "$userF_name";
    /*"DELETE FROM `studentdb` WHERE First_Name == '$userF_name' and Last_Name == '$userL_name'";
    echo "Student was removed";*/
}
?>