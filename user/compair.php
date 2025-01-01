

<?php
	include('header.php');
	include('config.php');
?>
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"style="color:#aa5f86;color;">Service Comparison</li>
        </ol>
    </nav>            

 <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h3 class="head_agileinfo text-center text-capitalize pb-5">
                <span style="color:#aa5f86;color;">Service Comparison</span></h3><br>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-6 wthree-form-left" style="margin-left:25%;">

<form name="form1" action="#" method="post"  enctype="multipart/form-data" >
                             
    <!-- <div class="form-group">
     <label for="exampleInputEmail1" class="col-form-label">Email Id</label>
     <input type="email" class="form-control" value="" name="email_id" id="email_id" required />
     </div>-->
  

<select name="service_name1" class="form-control">
<option value="" hidden="hidden">--select service 1--</option>
<?php
$sql="select * from tbl_service where status=0";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
	{
?>
<option value="<?php echo $row['service_name'];?>"><?php echo $row['service_name'];?></option>
<?php
	}
?>
</select>
<br />
<select name="service_name2" class="form-control">
<option value="" hidden="hidden">--select service 2--</option>
<?php
	$result=mysqli_query($con,"select * from tbl_service where status=0");
	while($row=mysqli_fetch_array($result))
	{
?>
<option value="<?php echo $row['service_name'];?>"><?php echo $row['service_name'];?></option>
<?php
	}
?>

</select>
<br />
<select name="service_name3" class="form-control">
<option value="" hidden="hidden">--select service 3--</option>
<?php
	$result=mysqli_query($con,"select * from tbl_service where status=0");
	while($row=mysqli_fetch_array($result))
	{
?>
<option value="<?php echo $row['service_name'];?>"><?php echo $row['service_name'];?></option>
<?php
	}
?>
</select>
<br />
<div class="right-w3l">
     <input type="submit" name="compare" class="form-control" value="Compare" style="margin-left:80%; width:20%;background-color:#aa5f86;color:#ffffff;" >
     </div>
<br>
</form>
</div>
</div>
</div>
</section>
<?php
global $cat_name;
if(isset($_POST['compare']))
{
	$service_name1=$_POST['service_name1'];
	$service_name2=$_POST['service_name2'];
	$service_name3=$_POST['service_name3'];
	$result1=mysqli_query($con,"SELECT * FROM tbl_service WHERE service_name='$service_name1' and  status=0");
	$result2=mysqli_query($con,"SELECT * FROM tbl_service WHERE service_name='$service_name2' and  status=0");
	$result3=mysqli_query($con,"SELECT * FROM tbl_service WHERE service_name='$service_name3' and  status=0");
?>

<h5 class="head_agileinfo text-center text-capitalize pb-5">
<span style="color:green;">Comparison Table</span></h5>
 <div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
        <table class="table" style="margin-top:47px;">
    <thead>
        <tr>
    	<th>Category</th>
   		<th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Discount</th>
        <th>total_price</th>
        <th>Duration</th>
        <th>Description</th>
    	<th>Whats included</th>
    	</tr>
<?php
	while($row=mysqli_fetch_array($result1))
	{
		$cat_id=$row['cat_id'];
		$result1=mysqli_query($con,"select * from tbl_category where cat_id='$cat_id' and status=0");
		while($row1=mysqli_fetch_array($result1))
		{
			$cat_name=$row1['cat_name'];
		}

?>
	<tr>
    <td><?php echo $cat_name;?></td>
    <td><?php echo $row['service_name'];?></td>
	<td><img src='../admin/serviceimage/<?php echo $row['image'];?>' style='height:60px;width:60px;' /></td>   	
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['discount'];?></td>
    <td><?php echo $row['total_price'];?></td>
   	<td><?php echo $row['duration'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['whats_included'];?></td>
    
    
     
    </tr>   
<?php
	}
?>
<?php
	while($row=mysqli_fetch_array($result2))
	{
		$cat_id=$row['cat_id'];
		$result1=mysqli_query($con,"select * from tbl_category where cat_id='$cat_id' and status=0");
		while($row1=mysqli_fetch_array($result1))
		{
			$cat_name=$row1['cat_name'];
		}
		

?>
	<tr>
    <td><?php echo $cat_name;?></td>
    <td><?php echo $row['service_name'];?></td>
    <td><img src='../admin/serviceimage/<?php echo $row['image'];?>' style='height:60px;width:60px;' /></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['discount'];?></td>
    <td><?php echo $row['total_price'];?></td>
   	<td><?php echo $row['duration'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['whats_included'];?></td>
    </tr>
    <?php
	}
	?>
<?php
	while($row=mysqli_fetch_array($result3))
	{
		$cat_id=$row['cat_id'];
		$result1=mysqli_query($con,"select * from tbl_category where cat_id='$cat_id' and status=0");
		while($row1=mysqli_fetch_array($result1))
		{
			$cat_name=$row1['cat_name'];
		}
		

?>
	<tr>
    <td><?php echo $cat_name;?></td>
    <td><?php echo $row['service_name'];?></td>
    <td><img src='../admin/serviceimage/<?php echo $row['image'];?>' style='height:60px;width:60px;' /></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['discount'];?></td>
    <td><?php echo $row['total_price'];?></td>
   	<td><?php echo $row['duration'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['whats_included'];?></td>
    </tr>     
<?php
}
	}
?>
</thead>
</table>
<?php
include('footer.php');
?>





<?php
include("footer.php");
?>