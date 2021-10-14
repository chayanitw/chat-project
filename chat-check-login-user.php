<?php
session_start();
require('dbconnect.php');
$a = $_POST['email'];
$b = $_POST['password'];
$strSQL = "SELECT * 
FROM user_profile
WHERE email = '$a' and password_user = '$b'";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult)
{
    header("location:chat-re-login.php");
}
else
{
    header("location:chat-Eng-setting.php"); /*edit*add main.php */
}
mysqli_close($con);
?>