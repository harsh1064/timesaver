<?php
include("config.php");
// include('db.php');
if(isset($_POST['pay_id'])&& isset($_POST['amount'])&& isset($_POST['email'])&& isset($_POST['service_name'])){
$pay_id=$_POST['pay_id'];	
$amount=$_POST['amount'];	
$email=$_POST['email'];	
$service_name=$_POST['service_name'];


		$sql2= "select * from `tbl_register` where register_id='$user'and status=0";
				$result2=mysqli_query($con,$sql2);
				$count = mysqli_num_rows($result2);
				while($row = mysqli_fetch_array($result2))
					{
					
					$register_id = $row['register_id'];
					
					}



$query="INSERT INTO razorpay(`email`,`amount`,`pay_id`,`pay_status`,`service_name`)
VALUES('$email','$amount','$pay_id','Success','$service_name')";
mysqli_query($con,$query);
}

?>