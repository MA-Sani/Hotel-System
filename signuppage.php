<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        body
        {
            background-image: url("../majid/images/bg.jpg");
            width: 100vw;
            height: 100vh;
            /* opacity: 0.5; */
        }
        form{
            width: 50%;
            /* margin: auto; */
            text-align: center;
            color: black;
            font-size: 18px;
            /* border: 2px solid blue; */
            margin: auto;
            padding: 8px 8px;
            font-weight: bold;    
        }
        form input{
            padding: 5px 5px;
        }
        form button{
            font-size: 14px;
            padding: 6px 6px;
            width: 40%;

            
        }
        h1{
            text-align: center;
            color: magenta;
            margin-top: 6%;
        }
    
    </style>
</head>
<body>
    <h1>Welcome To Sign Up page</h1>
    <form action="signup.php" method="post">
        First Name : <input type="text" placeholder="Enter First Name" name="fn" required><br><br>
        Last Name : <input type="text" placeholder="Enter Last Name" name="ln" required><br><br>
        Email : <input type="email" placeholder="Enter Your Email" name="em" required><br><br>
        Phone : <input type="number" placeholder="Enter Your Phone Number" name="ph" required><br><br>
        Password : <input type="password" placeholder="Enter Your Password" name="pas" required><br><br>
        <button type="submit" name="btn">Sign Up</button>

    </form>
    
    
</body>
</html>