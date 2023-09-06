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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Create an account</title>
    <style>
        #profilephoto{
            padding-top: 10px;
            padding-bottom: -10px;
            font-size: 23px;
        }
        
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
<form method="post" enctype="multipart/form-data">
   <div class="box">
    <div class="container">

        <header>
        <img class="logo" src="img/logo.png">
        </header>

        <div class="top">
            <span><a href="login.php" style="text-decoration: none; color: white;">Already have an Account?</a></span>
            <header>Create an account</header>
        </div>

        <!-- <div class="input-field">
        <picture class="input">
             <source srcset="..." type="image/svg+xml"> 
         <img src="img/1.jpg" class="img-fluid img-thumbnail" style="width:20%" alt="...">
        </picture>
        </div> -->

        <div class="input-field">
            <header style="font-size: 20px">Select Profile Picture</header>
            <input type="file" class="input" name="profilePhoto" id="profilephoto" required>
            <i class='bx bx-image' ></i>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Name" name="name" id="name" required>
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="email" class="input" placeholder="Email Id" name="emailId" id="" required>
            <i class='bx bx-envelope' ></i>
        </div>

        <div class="input-field">
            <input type="number" class="input" placeholder="Phone No" name="phoneNo" id="" required>
            <i class='bx bx-phone' ></i>
        </div>

        <div class="input-field">
            <input type="text" rows="5" class="input" placeholder="Address" name="address" id="" required>
            <i class='bx bx-map' ></i>
        </div>

        <div class="input-field">
            <input type="password" class="input" placeholder="Password" name="password" id="pass" required>
            <i class='bx bx-lock-alt'></i>
            <i class="far fa-eye" id="togglePassword" style="margin-left: 275px; cursor: pointer;"></i>
        </div>

        <div class="input-field">
            <input type="password" class="input" placeholder="Confirm Password" name="confirmPass" id="cpass" required>
            <i class='bx bx-lock-alt'></i>
            <i class="far fa-eye" id="togglePassword1" style="margin-left: 275px; cursor: pointer;"></i>
        </div>

        <div class="input-field">
            <button type="submit" class="submit" name="submit" value="submit" id="">Sign up</button>
        </div>

        <br>
        
        <div class="input-field">
            <button type="Refresh" class="submit" id="">Reset</button>
        </div>

    </div>
</div>
</form>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#pass');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
    
    const togglePassword1 = document.querySelector('#togglePassword1');
    const confirmPass = document.querySelector('#cpass');

    togglePassword1.addEventListener('click', function (c) {
    // toggle the type attribute
    const type = confirmPass.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPass.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script> 
</body>
</html>

<?php

if(isset($_POST['submit']))
{

$name = $_POST['name'];
$emailId = $_POST['emailId'];
$phoneNo = $_POST['phoneNo'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirmPass = $_POST['confirmPass'];
$profilePhoto = $_FILES['profilePhoto']['name'];

if($password==$confirmPass){

if($name!="" && $emailId!="" && $phoneNo!="" && $address!="" && $password!="" && $confirmPass!="" && $profilePhoto!="")
{
$query = "INSERT INTO signup() VALUES ('','$name','$emailId','$phoneNo', '$address','$password','$confirmPass','$profilePhoto')";

$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Account Created Successfully..')</script>";
	?>
	<meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/login.php">
<?php    
}
}
else
{
    echo "<script>alert('Please enter valid details..')</script>";
}
}
else{
    echo "<script>alert('Password & Confirm Password should be same')</script>";
}

}

  ?>