 <?php

//Establish Connection
$conn = mysqli_connect("localhost","root", "","ecommerce");

if($conn)
{
	// echo "Connection Ok";
}
else
{
	echo "Connection Failed".mysqli_connect_error();
}


?>