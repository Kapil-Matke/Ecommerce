<?php
$conn = mysqli_connect("localhost","root","","ecommerce");
$id=$_GET['orderid'];
error_reporting();
echo "<script>confirm('Are you sure you want Cancel this item..');</script>";
if(true)
{
$query="DELETE FROM `productorder` WHERE orderid = '$id' ";
$data=mysqli_query($conn,$query);
if($data)
{
?>
<meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/orderDetails.php">
<?php
}
}
?>

