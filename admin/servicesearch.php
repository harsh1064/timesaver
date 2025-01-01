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
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    $duration=$_POST['duration'];
    $turnaround_time=$_POST['turnaround_time'];
    $pricing=$_POST['pricing'];
    $whats_included=$_POST['whats_included'];




    $sql="insert into tbl_service(cat_id,service_name,price,description,image,
    duration,turnaround_time,pricing,whats_included)
    value('$cat_id','$service_name','$price','$description','$image','$duration',
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
</div>
</div>
</div>


            
    
        <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class="fa fa-angle-right"></i><B> TABLE</B></h3>
        
        <h4 style="margin-left:-206px;color:black"><i class="fa fa-angle-right"></i><B>Manage Service</B></h4>
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
                    <th class="hidden-phone">Description</th>
                    <th class="hidden-phone">Image</th>
                    <th class="hidden-phone">Duration</th>
                    
                    <th class="hidden-phone">TurnAround time</th>
                    <th class="hidden-phone">pricing</th>
                    
                    <th class="hidden-phone">what's included</th>
                    
                    
                    
                
                </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php

include("config.php");
if(isset($_GET['submit']))
{
    $search_query=$_GET['search'];






$sql="select pl.cat_name,lgn.* from tbl_service lgn INNER JOIN tbl_category pl ON
pl.cat_id=lgn.cat_id where lgn.service_name like '%$search_query%'and lgn.status=0";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['cat_name'];?></td>
        <td><?php echo $row['service_name'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['description'];?></td>
        


        <td><img src="serviceimage/<?php echo $row['image'];?>" style="width:50px;height:50px;"></td>
        
        <td><?php echo $row['duration'];?></td>
        <td><?php echo $row['turnaround_time'];?></td>
        <td><?php echo $row['pricing'];?></td>
        <td><?php echo $row['whats_included'];?></td>

        
       
</tr>
<?php

}
}
?>              </tr>
                  
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

