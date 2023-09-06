<?php
session_start();
include("connection.php");
 error_reporting();
 $userId =  $_SESSION["userId"];
  ?>
  <?php
$productid =($_GET["pid"]);
$quantity2=$_GET['quantity'];
if($quantity2>0){


if($productid>0 && $quantity2>0 )
{
$query = mysqli_query($conn,"SELECT * FROM product WHERE productid ='$productid'");
$result = mysqli_fetch_assoc($query);

$productid =$result['productid'];
$productname =$result['productname'];
$productimage =$result['productimage'];
$productprice =$result['productprice'];


 $total= $quantity2 * $productprice;
                        
$query1=mysqli_query($conn,"INSERT INTO `cart` VALUES ('$userId','','$productid','$productname','$productprice','$productimage','$quantity2','$total')");
}
 if($query1)
{
echo "<script>alert('Add To Cart Successfully...');</script>";
?>
<meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/index.php">
<?php
}
}
else
{
    echo "<script>alert('Please select the quantity it should be greater than zero');</script>";
    ?>
    <meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/productdetails.php?productid=<?php echo $productid ?>">

    <?php

}                        
      ?>