<?php
include("header.php");
include("sidebar.php");
?>
<?php
include("config.php");
if(isset($_POST['submit']))
{
    $city=$_POST['city'];
   
   
   
    



    $sql="insert into tbl_city(city)
    value('$city')";
$result=mysqli_query($con,$sql);
if($result)
{
    echo "record inserted";
}
}
?>

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Manage city/village</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class=""></i> </h4>
            <div class="form-panel">
              <form role="form" enctype="multipart/form-data" method="post" class="form-horizontal style-form">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">city/village</label>
                  <div class="col-lg-10">
                    <input type="text" name="city" placeholder="" id="f-name" class="form-control">
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
        <h4 style="margin-left:-195px"><i class="fa fa-angle-right"></i>Manage city/village</h4>
          <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>city</th>
                   
                    <th class="hidden-phone">Delete</th>
                    <th class="hidden-phone">Edit</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
$sql="select * from tbl_city where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['city'];?></td>
     
        


       
        
        
        
        <td><a href="city.php?city_id=<?php echo $row['city_id'];?>">
    <img src="img/delete.png"></td>
    <td><a href="editcity.php?city_id=<?php echo $row['city_id'];?>">
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
if(isset($_GET['city_id']))
{
    $city_id=$_GET['city_id'];
    $sql="update tbl_city set status=1 where city_id='$city_id'";
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