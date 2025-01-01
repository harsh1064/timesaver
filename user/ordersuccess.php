

<?php
include("header.php");
?>

<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success -</title>
    <meta charset="utf-8">
    
</head>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Order Status
        </li>
    </ol>
</nav>

<body>
<div class="container" style="width:100%;">
   <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span style="color:green">Order status</span></h5>
    
    <center><p style="margin-top:20px;">Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
    <h4 style="margin-left:28px; margin-top:20px; ">select your payment option</h4></center>

</div>
</body>
</html>



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



<div id="demo" >
<html>

<form method="post" action="payment.php">
 <input type="image" name="submit" border="0"
  src="assets/images/razor.png" style="height:300px; width:300px; margin-left:567px;margin-top:5px;" >
  </form>

</html></div>


  
  
  
