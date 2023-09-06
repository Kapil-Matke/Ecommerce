<?php
$conn = mysqli_connect("localhost","root","","ecommerce");

$userId =  $_SESSION["userId"];

error_reporting();

if(isset($_POST['order']))
{
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$mono = $_POST['mono'];
$addr = $_POST['addr'];
$addr2 = $_POST['addr2'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$payment = $_POST['payment'];

if($fname!="" && $lname!=""  && $email!=""  && $mono!=""  && $addr!=""  && $addr2!=""  && $country!=""  && $city!=""  && $state!=""  && $pincode!=""  && $payment!="" )
{
$query="INSERT INTO order_details () VALUES ('$userId','','$fname','$lname','$email','$mono','$addr','$addr2','$country','$city','$state','$pincode','$payment')";
$data=mysqli_query($conn,$query);
if($data)
{
?>
<meta http-equiv="Refresh" content="0; url=http://localhost/ecommerce/cartdata_db.php">
<?php
}
}
}

?>

