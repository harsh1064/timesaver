<?php
include("header.php");
include("sidebar.php");
?>

<?php
include("config.php");
if(isset($_GET['cat_id']))
{
    $cat_id=$_GET['cat_id'];

    $sql="select * from tbl_category where status=0 and cat_id='$cat_id'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
 

        $cat_name=$row['cat_name'];
        
        $image=$row['image'];
        
    
    }}
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
                    <input type="text" name="cat_name" value="<?php echo $cat_name;?>" placeholder="enter category name" id="f-name" class="form-control">
                    <p class="help-block"></p>
                  </div>
                </div>
        



                <div class="form-group has-error">
                  <label class="col-lg-2 control-label">Image</label>
                  <div class="col-lg-10">
                                  <img src="catimage/<?php echo $image; ?>" 
style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br />
<input type="file" name="image" id="image" style="float:left;" /></td>
<td><input type="hidden" name="image" id="image"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $image;} ?>"/>

                    <p class="help-block" ></p>

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



        <?php
include("config.php");
if(isset($_POST['submit']))
{
    if(isset($_FILES['image']))
    {
    


    $cat_name=$_POST['cat_name'];
    
    
    $image = trim($_FILES['image']['name']);

	
	if($_FILES["image"]["name"] == ''){
		 $image = $_POST['image'];
	}
	else{
		 $image = $_FILES['image']['name'];
	}

 
 move_uploaded_file($_FILES['image']['tmp_name'], "catimage/".$_FILES['image']['name']);







   

    $sql="update tbl_category set cat_name='$cat_name',image='$image' where status=0 and cat_id='$cat_id'";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "<script>alert('service updated successfully');</script>";
    echo "<script>window.location.href='category.php';</script>";
}
    }}
?>