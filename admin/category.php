<?php
include("header.php");
include("sidebar.php");
?>
<?php
include("config.php");
if(isset($_POST['submit']))
{
    $cat_name=$_POST['cat_name'];
   
    $image=$_FILES['image']['name'];
    



    $check=mysqli_query($con,"select * from tbl_category where cat_name='$cat_name' and image='$image'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    echo "category already exist";
   } else {  
    //insert results from the form input
      $query = "INSERT IGNORE INTO tbl_category(cat_name, image) VALUES('$cat_name', '$image')";

      $result = mysqli_query($con, $query) ;

      mysqli_close($con);
    }
    echo "<script>alert('category added successfully');</script>";
    };
  ?>



<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Manage Category</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Category</h4>
            <div class="form-panel">
              <form role="form" enctype="multipart/form-data" method="post" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Category Name</label>
                  <div class="col-lg-10">
                    <input type="text" name="cat_name" placeholder="enter category name" id="f-name" class="form-control">
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
         if(move_uploaded_file($file_tmp,'catimage/'.$file_name))
		 { 
			
		 }}
 }
 ?>



                <div class="form-group has-error">
                  <label class="col-lg-2 control-label">Image</label>
                  <div class="col-lg-10">
                    <input type="file" name="image" placeholder="" id="l-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" name="submit" type="submit">Submit</button>
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
        <h3 style="margin-left:-209px"><i class="fa fa-angle-right"></i> TABLE</h3>
        <div class="row mb">
        <h4 style="margin-left:-195px"><i class="fa fa-angle-right"></i>Manage Category</h4>
          <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Category Name</th>
                    <th>Image</th>
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

$SqlQuery="SELECT * FROM tbl_category where status=0 limit $startno,$pagesize ";
$SqlQuery1="SELECT * FROM tbl_category where status=0";

$SqlQueryRun=mysqli_query($con,$SqlQuery);
$SqlQueryRun1=mysqli_query($con,$SqlQuery1);

$total_rows=mysqli_num_rows($SqlQueryRun1);
?>					  
								  
								  
								<?php
while($rows=mysqli_fetch_array($SqlQueryRun))
{

?>
<tr>


<td><?php echo $rows['cat_name']; ?></td>

<td><img src="catimage/<?php echo $rows['image']; ?>" style="width:50px;height:50px;"></td>



 <td><a href="editcategory.php?cat_id=<?php echo $rows['cat_id'];?>">
    <img src="img/delete.png"></a></td>
    
    
    
    <td><a href="editcategory.php?cat_id=<?php echo $rows['cat_id'];?>">
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

<a href='category.php?start=0'>First</a>
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
<a href='category.php?start=<?php echo $j; ?>'><?php echo $pageno; ?></a>
<?php
}
$pageno++;
}
?>

  
  
<a href='category.php?start=<?php echo $j-$pagesize; ?>'>Last</a>
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

a:nth-child(5) {
  background-color: green;
  color: white;
}

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
if(isset($_GET['cat_id']))
{
    $cat_id=$_GET['cat_id'];
    $sql="update tbl_category set status=1 where cat_id='$cat_id'";
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