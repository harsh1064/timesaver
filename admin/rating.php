<?php
include("header.php");
include("sidebar.php");
?>
    
        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px"><i class="fa fa-angle-right"></i> TABLE</h3>
        <div class="row mb">
        <h4><i class="fa fa-angle-right"></i> Manage rating</h4>
          <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" style="    width: 85%;
    margin-left: 14%;" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                 
                  <th class="hidden-phone">email</th>
                    <th class="hidden-phone">service name</th>
                    
                    <th class="hidden-phone">rating score </th>
                    <th class="hidden-phone">message</th>
                    <th class="hidden-phone">delete</th>
                    
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
                  include("config.php");
$sql="select * from tbl_rating where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>

<tr><td>
<?php $id = $row['register_id'];
$sql1 = "select email from tbl_register where register_id = $id";
$result1 = mysqli_query($con,$sql1);
while($row1 = mysqli_fetch_array($result1))
{
echo $row1['email']; }?></td>





<td>
<?php $id = $row['service_id'];
$sql2 = "select service_name from tbl_service where service_id = $id and status = 0";
$result2 = mysqli_query($con,$sql2);
while($row2 = mysqli_fetch_array($result2))
{
echo $row2['service_name']; }?></td>

      
       
        <td><?php echo $row['rating_score'];?></td>
        <td><?php echo $row['message'];?></td>
      
        
        <td><a href="rating.php?rating_id=<?php echo $row['rating_id'];?>">
    <img src="img/delete.png"></td>
    
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
if(isset($_GET['rating_id']))
{
    $rating_id=$_GET['rating_id'];
    $sql="update tbl_rating set status=1 where rating_id='$rating_id'";
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