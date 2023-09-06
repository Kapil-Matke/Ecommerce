<?php
include("connection.php");
error_reporting(0);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    <style type="text/css">
        .logo{
            width: 200px;
            height: 45px;
        }
        body{
            background-image: url('images/bg2.jpg');
        }
    </style>

</head>
<body>
    
<form method="post">
   <div class="box">
    <div class="container">

        <header>
        <img class="logo" src="img/logo.png">
        </header>

        <div class="top">
            <span><a href="signup.php" style="text-decoration: none; color: white;">Create an Account?</a></span>
            <header>Login</header>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" name="emailId" id="" required>
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="password" class="input" name="password" placeholder="Password" id="" required>
            <i class='bx bx-lock-alt'></i>
        </div>
        
        <div class="input-field">
            <a href="index.php"><button type="submit" class="submit" value="Login" name ="submit" id="">Get Started</button></a>
        </div>

    </div>
</div>
</form>  
</body>
</html>

<?php

if(isset($_POST['submit']))
{
$emailId = $_POST['emailId'];
$password = $_POST['password'];

echo $emailId;

if($conn->connect_error){
    die("Failed to connect : ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("SELECT * FROM signup WHERE emailId = ?");
    $stmt->bind_param("s",$emailId);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0)
     {
        $data = $stmt_result->fetch_assoc();

        if($data['password'] == $password)
        {
            
// Start the session
session_start();

echo $emailId."session";
// Set session variables
$_SESSION["userId"] = $emailId;

            echo "<script>alert('Login Successful')</script>";
            ?>
    <meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/index.php">
          <?php 
        }
        else{
            echo "<script>alert('Invalid Email or Password')</script>";
        }
    }
    else {
        echo "<script>alert('Invalid Email or Password')</script>";
    }
    
}
}

 ?>