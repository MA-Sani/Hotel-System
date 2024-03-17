<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$connection = mysqli_connect($servername,$username,$password,$dbname);
if(!$connection)
{
    echo "There Was A problem Between Your Database And php";
}
else
{
    echo "Your Database Is Okayyyy Connection Established";
    echo "<br><br>";
}

?>