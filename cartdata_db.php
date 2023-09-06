
<?php
include("connection.php");
error_reporting();

$userId =  $_SESSION["userId"];

$query4 = "SELECT `userId`, `pid`, `productName`, `price`, `productImage`, `quantity`, `total` FROM `cart`";

$data4 = mysqli_query($conn,$query4);

$total = mysqli_num_rows($data4);

                 if($total!=0)
                        {
                    while($result4=mysqli_fetch_assoc($data4))
                {
                   $pid= $result4['pid']; 
                   $productName= $result4['productName'];
                   $price= $result4['price'];
                   $quantity= $result4['quantity'];
                   $productImage= $result4['productImage'];
                   $total= $result4['total'];


        $query5 = "INSERT INTO productorder VALUES ('$userId','','$pid','$productName','$price','$productImage','$quantity','$total')";

              $data5 = mysqli_query($conn,$query5); 
                }
            }
 if($data5)
{
echo "<script>alert('Order Placed  Successfully...');</script>";

$query6 = "TRUNCATE cart";

$data6 = mysqli_query($conn,$query6);
?>
<meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/orderDetails.php">
<?php
}

?>
