
<?php
  
  include("connection.php");
  error_reporting();

 $userId =  $_SESSION["userId"];
 $name =$_POST["name"];
 $phoneNo =$_POST["phoneNo"];
 $address =  $_POST["address"];


$query="UPDATE signup SET name='$name',phoneNo='$phoneNo',address='$address' WHERE emailid='$userId'";

echo $query;

$result=mysqli_query($conn,$query);

header("Location:account.php?message=success");



?>