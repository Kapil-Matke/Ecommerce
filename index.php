<?php
session_start();
include("connection.php");
error_reporting();

$userId =  $_SESSION["userId"];

$query1 = mysqli_query($conn,"SELECT * FROM signup WHERE emailId = '$userId'");

$result1 = mysqli_fetch_assoc($query1);


  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                            <a href="account.php" class="dropdown-item" type="button"><i class='bx bx-user'>&nbsp;</i><?php echo $result1['name'] ?></a>
                            <a  href="logout.php" class="dropdown-item" type="button"><i class='bx bx-log-out'>&nbsp;</i>Log out</a>
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
                <form action="index.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="searchfor" id="searchbar" placeholder="Search on Get Brands">
                
                         <input type="image" src="img/search.jpg" alt="Search" width="45px" height="40px" style="padding-left:5px ;">
                     
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
                            <a href="happyClients.php" class="nav-item nav-link">Happy Clients</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                        <li data-target="#header-carousel" data-slide-to="3"></li>
                        <li data-target="#header-carousel" data-slide-to="4"></li>
                        <li data-target="#header-carousel" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/13.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Grocery</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">A stocked pantry with a press of a button<br>Save time with us</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="http://localhost/ecommerce/index.php?categoryid=1">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/11.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Mobiles</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Phones to match your needs<br>Take the best one with the best price</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="http://localhost/ecommerce/index.php?categoryid=2">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Clothes that will lift you<br>The outfits you are looking for</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="http://localhost/ecommerce/index.php?categoryid=3">Shop Now</a>
                                </div>
                            </div>
                        </div>

                         <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Electronics</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Your complete electronics store<br>Start electronics here!</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="http://localhost/ecommerce/index.php?categoryid=4">Shop Now</a>
                                </div>
                            </div>
                        </div>

                         <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Furnitures</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Make every home a desirable place<br>Everything your home deserves</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="http://localhost/ecommerce/index.php?categoryid=5">Shop Now</a>
                                </div>
                            </div>
                        </div>

                         <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/7.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Medicines</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">We care beyond what your doctors have prescribed, All you need is right here !!</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="http://localhost/ecommerce/index.php?categoryid=6">Shop Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/8.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white ">Coming soon!!</h6>
                        <h3 class="text-white mb-3">Special offer on Electronics</h3>
                        
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/14.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white ">Coming soon!!</h6>
                        <h3 class="text-white mb-3">Special offer on Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->

    <!--- categories php code start here -->


    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">



<?php



    
    $query = mysqli_query($conn,"select categoryid,categoryname,categoryimage,productquantity from category order by categoryid ");

    while($result = mysqli_fetch_assoc($query))
    {
?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <a  href=index.php?categoryid=<?php echo $result['categoryid'] ?> >
                            <img class="img-fluid" src="img/<?php echo $result['categoryimage'] ?>" >
                            </a>
                        </div>
                        <div class="flex-fill pl-3">
                            <h6><a href=index.php?categoryid=<?php echo $result['categoryid'] ?>><?php echo $result['categoryname'] ?></a></h6>
                            <small class="text-body"><?php echo $result['productquantity'] ?></small>
                        </div>
                    </div>
                </a>
            </div>
            
            <?php

    }

?>
            
        </div>
    </div>

    <!-- Categories code End -->

    <!-- Products code Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Products</span></h2>
        <div class="row px-xl-5">


<?php
                 $querystring="";

                 if(isset($_GET["categoryid"])) { 
                    $productcategoryid =htmlspecialchars($_GET["categoryid"]);
                 }
                 else {
                    $productcategoryid=1;
                 }

                 $querystring= "SELECT productid,productname,productcategoryid,productdescription,productprice,productimage,companyname FROM product WHERE productcategoryid= '$productcategoryid' ";       
               

                  if(isset($_POST["searchfor"])) { 

                   $searchfor = mysqli_real_escape_string($conn, $_POST['searchfor']);
                   
                    $querystring= "SELECT productid,productname,productcategoryid,productdescription,productprice,productimage,companyname FROM product,category WHERE  (categoryname like '%$searchfor%' and category.categoryid=product.productcategoryid ) or ( productname like '%$searchfor%' and category.categoryid=product.productcategoryid )";   

               
                  
               }
                $recordsfound=false;
               

                $query = mysqli_query($conn,$querystring);

                while($result = mysqli_fetch_assoc($query))
                { 

                ?>

            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
            
                    <div class="product-img position-relative overflow-hidden">
                        
                        <a  href="productdetails.php?productid=<?php echo $result['productid']; ?>">
                        <img class="img-fluid w-100" src="img/<?php echo $result['productimage']; ?>" alt="">

                        </a>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href="productdetails.php?productid=<?php echo $result['productid']; ?>"><i class="fa fa-shopping-cart"></i></a>
                            
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a href="productdetails.php?productid=<?php echo $result['productid']; ?>"><?php echo $result['productname']; ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rs <?php echo $result['productprice']; ?></h5><h6 class="text-muted ml-2"></h6>
                        </div>


                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>

                </div>

            </div>

            <?php

            $recordsfound=true;

    }

    if($recordsfound==false){
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert' style='margin-left:15px;'>
  <strong>Sorry!</strong> No Records Found
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }

?>
  
        </div>
    </div>
    <!-- Products code End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/8.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 10%</h6>
                        <h3 class="text-white mb-3">On Electronics</h3>
                        <a href="http://localhost/ecommerce/index.php?categoryid=4" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/14.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">On Fashion</h3>
                        <a href="http://localhost/ecommerce/index.php?categoryid=3" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

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
                            <a class="text-secondary mb-2" href="happyClients.php"><i class="fa fa-angle-right mr-2"></i>Happy Clients</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="orderDetails.php"><i class="fa fa-angle-right mr-2"></i>My Orders</a>
                            <a class="text-secondary mb-2" href="account.php"><i class="fa fa-angle-right mr-2"></i>Account Info</a>
                            <a class="text-secondary mb-2" href="login.php"><i class="fa fa-angle-right mr-2"></i>Log Out</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Social</h5>          
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https://instagram.com/darsh_x09x?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/profile.php?id=100009229606524&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.linkedin.com/in/darshan-kalyankar-a16841178"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://twitter.com/Darshan982001"><i class="fab fa-twitter"></i></a>

                            
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
                    &copy; <a class="text-primary" >Copyrights</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="aboutus.php">Black Hat Team</a>
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