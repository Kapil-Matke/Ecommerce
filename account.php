<?php
  session_start();
  include("connection.php");
  error_reporting();

  
  
  $userId = $_SESSION["userId"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Account</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        #searchbar::placeholder{
            color: black;
            text-align: center;
        }
        #searchbar{
            border-style: ridge;
            border-radius: 10px;
            background-color: ;
        }
        #profile{
            border: 2px solid;
            border-color: black;
            margin-left: -10px ;
        }
        img#profile {
        transition: 0.3s;
        }

        #profile:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="contact.php">Contact</a>
                    <a class="text-body mr-3" href="aboutus.php">About</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown" style="justify-content: right;">
                        My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="login.php" class="dropdown-item" type="button">Log in</a>
                            <a  href="signup.php" class="dropdown-item" type="button">Create an Account</a>
                            <a  href="logout.php" class="dropdown-item" type="button">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Get</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Brands</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchbar" placeholder="~ My Account ~">
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+91 797 229 0410</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">              
                         <?php 
                      


$query = mysqli_query($conn,"SELECT categoryid,categoryname FROM category ORDER BY categoryid");

   while($results = mysqli_fetch_assoc($query))
    {


?>
                        <a href="index.php?categoryid=<?php echo $results['categoryid'] ?>" class="nav-item nav-link"><?php echo $results['categoryname'] ?></a>
                      

<?php 
 } 
?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Get</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Brands</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="orderDetails.php" class="nav-item nav-link">My Orders</a>
                            <a href="account.php" class="nav-item nav-link">Account</a>
                            <a href="sellonwebsite.php" class="nav-item nav-link">Sell Here</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="aboutus.php" class="nav-item nav-link">About</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="cart.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">Cart</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <span class="breadcrumb-item active">Account</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->    

  <!-- Account Start -->

  <?php

$query = "SELECT `name`, `emailId`, `phoneNo`, `address`, `profilePhoto` FROM `signup` WHERE `emailId`= '$userId' ";

$data = mysqli_query($conn,$query);

// $total = mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);

?>
                <div class='bg-light p-30 mb-5'>
                 <div class='col-md-6 form-group'>
                    <picture class="profile">
                    <img id="profile" src="img/<?php echo $result['profilePhoto'] ?>" alt="Image not found" height='150' >
                    </picture><br>
                    <label style="margin-left: 10px; padding-top: 10px;">Profile Picture</label>

                 </div>
                  
                
                    <div class='row'>     
                        <div class='col-md-6 form-group'>
                            <label>Name</label>
                            <input class='form-control'  type='text' name='name' value="<?php echo $result['name'] ?>">
                        </div>
                        
                        <div class='col-md-6 form-group'>
                            <label>E-mail</label>
                            <input class='form-control' type='text' name='emailId' placeholder="<?php echo $result['emailId'] ?>">
                        </div>

                        <div class='col-md-6 form-group'>
                            <label>Mobile No</label>
                            <input class='form-control' type='number' name='phoneNo' placeholder="<?php echo $result['phoneNo'] ?>"></input>
                        </div>

                        <div class='col-md-6 form-group'>
                            <label>Address</label>
                            <input class='form-control' type='text' name='address' placeholder="<?php echo $result['address'] ?>"></input>
                        </div>

                        <div>                
                            <a class='btn btn-primary py-2 px-4' href="logout.php" type='submit' name='add' style='width: 100%; height: 40px; margin-left: 14px; '>Logout</a>
                        </div>      

                    </div>
                    </div>
                   </form>
                    </div>
                </div>
            </div>

 <!-- Account End -->

   <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/s.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/zara.png" alt="">
                    </div>       
                    <div class="bg-light p-4">
                        <img src="img/apple.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/samsung.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/mi.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/vivos.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/bosch.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/oneplus.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5" id="about">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">You can contact with us, email us for more information. 24*7 service available</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i> Pune, Maharashtra</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>enquiry@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3" style="padding-bottom: 10px;"></i>+91 7972290410</p>
                <p class="mb-2"><i class="fab fa-whatsapp text-primary mr-3"></i>+91 9545990160</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="account.php"><i class="fa fa-angle-right mr-2"></i>Account</a>
                            <a class="text-secondary mb-2" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact us</a>
                            <a class="text-secondary mb-2" href="aboutus.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Cart</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="orderDetails.php"><i class="fa fa-angle-right mr-2"></i>My Orders</a>
                            <a class="text-secondary mb-2" href="account.php"><i class="fa fa-angle-right mr-2"></i>Account Info</a>
                            <a class="text-secondary mb-2" href="logout.php"><i class="fa fa-angle-right mr-2"></i>Log Out</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Social</h5>          
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https://instagram.com/darsh_x09x?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/profile.php?id=100009229606524&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.linkedin.com/in/darshan-kalyankar-a16841178"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>

                            
                        </div><br>
                        <p>Create Account</p>
                        <form action="">
                            <div class="input-group">
                                
                                <div class="input-group-append">
                                    <a class="btn btn-primary" href="signup.php">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" >Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" >Black Hat Team</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

