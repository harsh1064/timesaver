<?php
include("header.php");
?>

<?php
include("config.php");
global $email,$service_name,$total_price;
$sql="select * from tbl_booking";	
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{	
	$email=$row['email'];
 $service_name=$row['service_name'];
	$total_price=$row['total_price'];	
}

?>

<center>
<a href="payment3.php"><img src="images/razorpay.png" alt="" /></a></center>
<center><a href="payment2.php" target="_blank"><img src="images/pay.jpg" alt="" /></a></center>


 

<?php
include("footer.php");
?>