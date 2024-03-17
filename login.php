<?php
session_start();
if(isset($_REQUEST['email']) && isset($_REQUEST["ps"]))
{
    $email = $_REQUEST['email'];
    $password = $_REQUEST['ps'];
    $conn = mysqli_connect('localhost','root','','signup');
    $user_type = mysqli_real_escape_string($conn,$_REQUEST['role']);
    $select = "SELECT * FROM id_pass WHERE user_Email = '$email' AND user_password = '$password'";
    $result = mysqli_query($conn,$select); 
    
    if(mysqli_num_rows($result)>0){
    
          $row = mysqli_fetch_assoc($result);
        
      if($row)
        {
            $_SESSION['email'] = $row['Email'];
            
            header('location:sucess.html');
        }
        else
        {
            $_SESSION['email'] = $row['Email'];
            header('location:sucess.html');
        } 

    }  
    else{
        $error[]='incorrect email or password!';
    }  
    
}  
?>



<!DOCTYPE html>
<html>
<head>
        <link href="login.css" rel="stylesheet">
</head>
<body>
    <div id="head">
        <h1>Please Login Here</h1>
    </div>
    <form action="signuppage.php" method="post">
    <div class="main">
        <h4><i>IF You Have Already Register Login HERE</i></h4>
    <div class="user">User Name</div>
    <input type="email"  name="email" placeholder="Enter Email">

    <div class="user">Password</div>
    <input type="password"  class="a" placeholder="Enter Password">

    <input type="submit" name="ps"  class="login" Value="Login"><br>
    <h1>OR</h1>
    <button type="submit" id="sign"><a href="signuppage.php">Register Now</a></button>
    <!-- <button type="button" onclick="navigateToPHP()">Go to PHP Page</button> -->

    </div>
    </form>
           
    </div>
    <script>
        function navigateToPHP() {
  window.location.href = "signuppage.php";
}

    </script>
      
</body>
</html>