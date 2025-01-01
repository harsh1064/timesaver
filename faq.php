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
    



    $sql="insert into tbl_category(cat_name,image)
    value('$cat_name','$image')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "record inserted";
}
}
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
$sql="select * from tbl_category where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['cat_name'];?></td>
        
        


        <td><img src="catimage/<?php echo $row['image'];?>" style="width:50px;height:50px;"></td>
        
        
        
        <td><a href="category.php?cat_id=<?php echo $row['cat_id'];?>">
    <img src="img/delete.png"></td>
    <td><a href="editcategory.php?cat_id=<?php echo $row['cat_id'];?>">
    <img src="img/edit.png"></td>
</tr>
<?php

}
?>

                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
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