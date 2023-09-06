<?php
include("connection.php");
  error_reporting(0);

 echo "<script>confirm('You want to clear all history..')</script>";
 if (true) {
$query="Truncate productorder"; 
$data=mysqli_query($conn,$query);
}

?>
<meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/orderDetails.php">
<?php

?>