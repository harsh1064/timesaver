<?php
include("header.php");
include("sidebar.php");
?>

<?php
include("config.php");
if(isset($_POST['submit']))
{
    $cat_id=$_POST['cat_id'];
    $service_name=$_POST['service_name'];
    $price=$_POST['price'];
    $discount=$_POST['discount'];
    $total_price=$_POST['total_price'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    $duration=$_POST['duration'];
    $turnaround_time=$_POST['turnaround_time'];
    $pricing=$_POST['pricing'];
    $whats_included=$_POST['whats_included'];




    $sql="insert into tbl_service(cat_id,service_name,price,discount,total_price,description,image,
    duration,turnaround_time,pricing,whats_included)
    value('$cat_id','$service_name','$price','$discount','$total_price','$description','$image','$duration',
    '$turnaround_time','$pricing','$whats_included')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "record inserted";
}
}
?>




<section id="main-content">
      <section class="wrapper">
        <h3 style="color:red"><i class="fa fa-angle-right"></i><B> Add Service</B></h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <!-- <h4 style="color:black"><i class="fa fa-angle-right"></i><B> Service</B></h4> -->
            <div class="form-panel">
              <form role="form" enctype="multipart/form-data" method="post"  class="form-horizontal style-form" >
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Category Name</label>
                  <div class="col-lg-10">

                  <select name="cat_id" id="f-name" class="form-control">
   <option value="0" >Select Category Name</option>
            <?php
include("config.php");

$sql1 = "select * from tbl_category where status=0";;
$result1 = mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result1))
{
echo "<option value = '$row[0]'>$row[1]</option>";
}

?>
            </select>












                    
                   
                  </div>
                </div>


            
              <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Service Name</label>
                  <div class="col-lg-10">
                    <input type="text" name="service_name" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">price </label>
                  <div class="col-lg-10">
                    <input type="text"name="price"onchange="updateInput()" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                
                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">discount(%) </label>
                  <div class="col-lg-10">
                    <input type="text"name="discount"onchange="updateInput()" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Total-price </label>
                  <div class="col-lg-10">
                    <input type="text"name="total_price" placeholder="" id="f-name" class="form-control">
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
                    <input type="text"name="description" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
                <?php
 if(isset($_FILES['image']))
 {
	 $file_name=$_FILES['image']['name'];
	 $file_tmp=$_FILES['image']['tmp_name'];
	 $file_size=$_FILES['image']['size'];
     if($_FILES['image']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'serviceimage/'.$file_name))
		 { 
			
		 }}
 }
 ?>


                <div class="form-group has-error">
                  <label class="col-lg-2 control-label">Image</label>
                  <div class="col-lg-10">
                    <input type="file"name="image" placeholder="" id="l-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                
            

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Duration</label>
                  <div class="col-lg-10">
                    <input type="text"name="duration" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">TurnAround time</label>
                  <div class="col-lg-10">
                    <input type="text"name="turnaround_time" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>

                <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">pricing </label>
                  <div class="col-lg-10">
                    <input type="text"name="pricing" placeholder="" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>


                
              <form role="form" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">what's included</label>
                  <div class="col-lg-10">
                    <input type="text"name="whats_included" placeholder="" id="f-name" class="form-control">
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
    
        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class="fa fa-angle-right"></i><B> Manage Service</B></h3>
        
        <!-- <h4 style="margin-left:-206px;color:black"><i class="fa fa-angle-right"></i><B>Manage Service</B></h4> -->
        <div class="row mb">
        <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>CategoryName</th>
                    <th>ServiceName</th>
                    <th class="hidden-phone">Price</th>
                    <th class="hidden-phone">discount</th>
                    <th class="hidden-phone">total-price</th>
                    <th class="hidden-phone">Description</th>
                    <th class="hidden-phone">Image</th>
                    <th class="hidden-phone">Duration</th>
                    
                    <th class="hidden-phone">TurnAround time</th>
                    <th class="hidden-phone">pricing</th>
                    
                    <th class="hidden-phone">what's included</th>
                    
                    
                    <th class="hidden-phone">Delete</th>
                    <th class="hidden-phone">Edit</th>
                
                </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">

                  <?php
        include("config.php");          
      if(isset($_REQUEST['start']))
$startno=$_REQUEST['start'];
else
$startno=0;

$pagesize=4;

$pageno=1;




$SqlQuery="select pl.cat_name,lgn.* from tbl_service lgn INNER JOIN tbl_category pl ON
pl.cat_id=lgn.cat_id where lgn.status=0 limit $startno,$pagesize ";
$SqlQuery1="select pl.cat_name,lgn.* from tbl_service lgn INNER JOIN tbl_category pl ON
pl.cat_id=lgn.cat_id where lgn.status=0";

$SqlQueryRun=mysqli_query($con,$SqlQuery);
$SqlQueryRun1=mysqli_query($con,$SqlQuery1);

$total_rows=mysqli_num_rows($SqlQueryRun1);
?>            
                  
                  
                <?php
while($row=mysqli_fetch_array($SqlQueryRun))
{

?>
<tr>



<td><?php echo $row['cat_name'];?></td>
        <td><?php echo $row['service_name'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['discount'];?></td>
        <td><?php echo $row['total_price'];?></td>
        <td><?php echo $row['description'];?></td>
        


        <td><img src="serviceimage/<?php echo $row['image'];?>" style="width:50px;height:50px;"></td>
        
        <td><?php echo $row['duration'];?></td>
        <td><?php echo $row['turnaround_time'];?></td>
        <td><?php echo $row['pricing'];?></td>
        <td><?php echo $row['whats_included'];?></td>




 <td><a href="service.php?service_id=<?php echo $row['service_id'];?>">
    <img src="img/delete.png"></a></td>
    
    
    
    <td><a href="editservice.php?service_id=<?php echo $row['service_id'];?>">
    <img src="img/edit.png"></a></td>

</tr>
<?php
}
?>
</table>
<center>

<!-- Header and Slogan -->

<!-- pagination elements -->
<div class="pagination_section">

<a href='service.php?start=0'>First</a>
<?php
for($j=0;$j<$total_rows;$j=$j+$pagesize)
{
if($startno==$j)
{
?>

<?php echo $pageno; ?>
<?php
}
else
{
?>
<a href='service.php?start=<?php echo $j; ?>'><?php echo $pageno; ?></a>
<?php
}
$pageno++;
}
?>

  
  
<a href='service.php?start=<?php echo $j-$pagesize; ?>'>Last</a>
</div>

</center>

 </div>
             </div>
      </div>

      <style>

/* header styling */
h1 {
  color: green;
}

/* pagination position styling *
.pagination_section {
  position: relative;
}

/* pagination styling */
.pagination_section a {
  color: black;
  padding: 10px 18px;
  text-decoration: none;
}

/* pagination hover effect on non-active */
.pagination_section a:hover:not(.active) {
  background-color: #031F3B;
  color: white;
}

/* pagination hover effect on active*/



a:nth-child(1) {
  font-weight: bold;
}

a:nth-child(7) {
  font-weight: bold;
}

.content {
  margin: 50px;
  padding: 15px;
  width: 700px;
  height: 200px;
  border: 2px solid black;
}
</style>
</head>



          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>













    

    
<?php
if(isset($_GET['service_id']))
{
    $service_id=$_GET['service_id'];
    $sql="update tbl_service set status=1 where service_id='$service_id'";
    $result=mysqli_query($con,$sql);
if($result)
{
    echo "record deleted";
}
}
?>




<?php
include("footer.php");
?>

