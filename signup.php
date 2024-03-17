<?php
include ("connection.php");
if(isset($_POST['btn']))
{
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $em = $_POST['em'];
    $ph = $_POST['ph'];
    $pas = $_POST['pas'];
    
}



$query = "INSERT INTO signup (user_FirstName ,user_LastName ,user_Email ,user_Phone ,user_Password) 
VALUES ('$fn','$ln','$em','$ph','$pas')";

$insert = mysqli_query($connection , $query);


if(!$insert)
{
    echo "You Have Not Sign Up Successfully 'Please Try Again'".mysqli_connect_error();
}
else
{

    echo "You have Successfully Create Your Account";
    $dis = include("signuppage.php");
    echo $dis;
}


?>