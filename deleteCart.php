<?php
$conn = mysqli_connect("localhost","root","","ecommerce");
$id=$_GET['orderid'];
error_reporting();
if($id>0)
{
$query="DELETE FROM `cart` WHERE orderid = '$id' ";
$data=mysqli_query($conn,$query);
if($data)
{
echo "<script>confirm('Are you sure you want delete this item..');</script>";
?>
<meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/cart.php">
<?php
}
}
?>

