<?php
include("header.php");
include("sidebar.php");
?>
   


<section id="main-content">
      <section class="wrapper">
        <h3 style="margin-left:-209px;color:red"><i class="fa fa-angle-right"></i><B> TABLE</B></h3>
        
        <h4 style="margin-left:-1px;font-size:23px;color:black"><i class="fa fa-angle-right"></i><B>Manage service partner</B></h4>
        <div class="row mb">
        <!-- page start-->
          <div class="content-panel" style="margin-left:-200px">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style=" width: 85%;
    margin-left: 217px"
}
                <thead>
                  <tr>
     
                    <th>Name</th>
                    <th class="hidden-phone">email</th>
                    <th class="hidden-phone">mobileno</th>
                    <th class="hidden-phone">address</th>
                   
                    <th class="hidden-phone">service name</th>
                    <th class="hidden-phone">work</th>
                    <th class="hidden-phone">proof id</th>
                    <th class="hidden-phone">Approve</th>
                   
                
                </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  <?php
 include("config.php");
 $sql="select pl.service_name,lgn.* from tbl_pr lgn INNER JOIN tbl_service pl ON
 pl.service_id=lgn.service_id where lgn.status='pending'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['mobileno'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['service_name'];?></td>
        <td><?php echo $row['work'];?></td>
        <td><img src="../idimage/<?php echo $row['image'];?>" style="width:50px;height:50px;"></td>
        

        
        <td><a href="partener.php?pr_id=<?php echo $row['pr_id'];?>">
    <img src="img/tick2.jpg"></td>
    
</tr>
<?php

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
if(isset($_GET['pr_id']))
{
    $pr_id=$_GET['pr_id'];
    $sql="update tbl_pr set status='approve' where pr_id='$pr_id'";
    $result=mysqli_query($con,$sql);
if($result)
{
    echo "request approved";
}
}
?>
<?php
include("footer.php");
?>