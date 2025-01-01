<?php
include("header.php");
include("sidebar.php");
?>

<?php
include("config.php");
if(isset($_GET['service_id']))
{
    $service_id=$_GET['service_id'];

    $sql="select * from tbl_service where status=0 and service_id='$service_id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
 

        $cat_id=$row['cat_id'];
        $service_name=$row['service_name'];
        $price=$row['price'];
        $discount=$row['discount'];
        $total_price=$row['total_price'];
        $description=$row['description'];
        $image=$row['image'];
        $duration=$row['duration'];
        $turnaround_time=$row['turnaround_time'];
        $pricing=$row['pricing'];
        $whats_included=$row['whats_included'];
    
    }}
    ?>



<section id="main-content">
      <section class="wrapper">
        <h3 style="color:red"><i class="fa fa-angle-right"></i><B>Manage Service</B></h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4 style="color:black"><i class="fa fa-angle-right"></i><B> Edit Service</B></h4>
            <div class="form-panel">
              <form role="form" enctype="multipart/form-data" method="post"  class="form-horizontal style-form" >
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Category Name</label>
                  <div class="col-lg-10">
                  <select name="cat_id" id="f-name" class="form-control">
   <option value="0" >Select Category Name</option>
            <?php
include("config.php");

$sql1 = "select * from tbl_category where status=0";
$result1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result1))
{ ?>
<option value = '<?=$row[0]?>' <?php if($cat_id==$row[0]){ echo "selected='selected'";}?> >
<?=$row[1];?></option>
<?php }

?>


            </select>

               <p class="help-block"></p>
                  </div>
                </div>


            
              <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Service Name</label>
                  <div class="col-lg-10">
                    <input type="text" name="service_name"value="<?php echo $service_name;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">price </label>
                  <div class="col-lg-10">
                    <input type="text"name="price"onchange="updateInput()"value="<?php echo $price;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                
                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">discount </label>
                  <div class="col-lg-10">
                    <input type="text"name="discount"onchange="updateInput()"value="<?php echo $discount;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Total-price </label>
                  <div class="col-lg-10">
                    <input type="text"name="total_price" placeholder="" value="<?php echo $total_price;?>"id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <script>
function updateInput(){
    var price = document.getElementsByName("price")[0].value;
    var discount = document.getElementsByName("discount")[0].value;
    document.getElementsByName("total_price")[0].value = price-(discount*price/100);
}
</script>
                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Description </label>
                  <div class="col-lg-10">
                    <input type="text"name="description"value="<?php echo $description;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
          


                <div class="form-group has-error">
                  <label class="col-lg-2 control-label">Image</label>
                  <div class="col-lg-10">
                  <img src="serviceimage/<?php echo $image; ?>" 
style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
<input type="file" name="image" id="image" style="float:left;" /></td>
<td><input type="hidden" name="image" id="image"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $image;} ?>"/>
 <p class="help-block"></p>
                  </div>
                </div>

                
            

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Duration</label>
                  <div class="col-lg-10">
                    <input type="text"name="duration"value="<?php echo $duration;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">TurnAround time</label>
                  <div class="col-lg-10">
                    <input type="text"name="turnaround_time" value="<?php echo $turnaround_time;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">pricing </label>
                  <div class="col-lg-10">
                    <input type="text"name="pricing" value="<?php echo $pricing;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>


                
              <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">what's included</label>
                  <div class="col-lg-10">
                    <input type="text"name="whats_included" value="<?php echo $whats_included;?>" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>


                
                
              



                
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit"name="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>


        <?php
include("config.php");
if(isset($_POST['submit']))
{
    if(isset($_FILES['image']))
    {
    


    $cat_id=$_POST['cat_id'];
    $service_name=$_POST['service_name'];
    $price=$_POST['price'];
    $discount=$_POST['discount'];
    $total_price=$_POST['total_price'];
    $description=$_POST['description'];
    
    $image = trim($_FILES['image']['name']);

	
	if($_FILES["image"]["name"] == ''){
		 $image = $_POST['image'];
	}
	else{
		 $image = $_FILES['image']['name'];
	}

 
 move_uploaded_file($_FILES['image']['tmp_name'], "serviceimage/".$_FILES['image']['name']);







    $duration=$_POST['duration'];
    $turnaround_time=$_POST['turnaround_time'];
    $pricing=$_POST['pricing'];
    $whats_included=$_POST['whats_included'];
    $sql="update tbl_service set cat_id='$cat_id',service_name='$service_name',
    price='$price',discount='$discount',total_price='$total_price',description='$description',image='$image',duration='$duration',
    turnaround_time='$turnaround_time',pricing='$pricing',whats_included='$whats_included'
     where status=0 and service_id='$service_id'";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('service updated successfully');</script>";
    echo "<script>window.location.href='service.php';</script>";
}
    }}
?>

    